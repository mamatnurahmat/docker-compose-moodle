<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Defines the cache usage
 *
 * @package   theme_remui
 * @copyright (c) 2023 WisdmLabs (https://wisdmlabs.com/) <support@wisdmlabs.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace theme_remui;
    /**
     * Enrolment Page Handler
     */

class EnrolmentPageHandler {
    /**
     * Generate data for enrollment page.
     * @param incourse page context
     * @return context
     */

    public function generate_enrolment_page_context($templatecontext) {
        global $COURSE, $DB, $USER, $PAGE, $CFG, $OUTPUT;

        $cid = (int)$COURSE->id;

        $context = array();

        $temp = array();
        $temp['id'] = $COURSE->id;
        $temp['coursename'] = format_text($COURSE->fullname);
        $temp['category'] = format_text($COURSE->category);
        $temp['coursename'] = format_text($COURSE->fullname);

        try {
            $coursecategory = \core_course_category::get($COURSE->category);
            $temp['categoryname'] = $coursecategory->get_formatted_name();
            $temp['categoryurl'] = $CFG->wwwroot . '/course/index.php?categoryid=' . $COURSE->category;
        } catch (\Exception $e) {
            $coursecategory = "";
            $categoryname = "";
            $categoryurl = "";
        }

        $coursecontext = \context_course::instance($cid);
        $enrolledstudents = count_enrolled_users($coursecontext, 'mod/quiz:attempt');
        $temp['enrolledstudents'] = $enrolledstudents;

        $teachers = get_enrolled_users($coursecontext, 'mod/folder:managefiles', 0, '*', 'firstname');

        if ($teachers) {
            $profilecount = 0;
            $frontlineteacher = false;
            foreach ($teachers as $key => $teacher) {

                if ($frontlineteacher == false) {
                    $temp['instructor']['name'] = fullname($teacher, true);
                    if (count($teachers) > 1) {
                        $temp['instructor']['name'] = fullname($teacher, true) . " +" . (count($teachers) - 1);
                    }
                }

                $temp['instructor']['avatars'][] = [
                    'avatars' => $OUTPUT->user_picture($teacher),
                    'teacherprofileurl' => $CFG->wwwroot.'/user/profile.php?id='.$teacher->id
                ];
                $profilecount++;

                if ($profilecount >= 3) {
                    break;
                }
            }
        }

        if (is_plugin_available('block_edwiserratingreview')) {
            $rnr = new \block_edwiserratingreview\ReviewManager();
            $PAGE->requires->strings_for_js([
                'noreviewsfound',
            ], 'block_edwiserratingreview');
            $temp['rnrreviewdesign'] = $rnr->get_short_design_enrolmentpage($cid);
            $rnrreviewfull = $rnr->generate_enrolpage_block($cid);
        }

        // Get sections information.
        $modinfo = get_fast_modinfo($COURSE);
        $sections = $modinfo->get_section_info_all();

        $sectioncount = 0;
        $contentdata = array();
        foreach ($sections as $sectionnum => $section) {
            // Display Sections/Topics even if they are hidden and restricted.

            if ($section->__get('uservisible')) {
                if ($section->__get('availableinfo') || $section->__get('available')) {
                    $sectioncount += 1;
                }
            }
        }

        $temp['totallessons'] = $sectioncount;

        $customfielddata = get_course_metadata($cid);

        if (isset($customfielddata['edwcourseintrovideourlembedded'])) {
            $temp['introvideourl'] = $customfielddata['edwcourseintrovideourlembedded'];
        }

        // Header section Context.
        $context['headersection'] = $temp;

        $temp = array();

        $temp['coursesummary'] = $COURSE->summary;

        if (isset($rnrreviewfull)) {
            $temp['rnrreviewfull'] = $rnrreviewfull;
        }

        $context['courseoverview'] = $temp;

        // Enrollment Data - Pricing Section.
        $temp = array();
        $temp = $this->get_course_purchase_details($COURSE->id);
        $temp['enrolledstudents'] = $enrolledstudents;

        if (isset($customfielddata['edwcoursedurationinhours'])) {
            $temp['courselength'] = $customfielddata['edwcoursedurationinhours'];
        }
        if (isset($customfielddata['edwskilllevel'])) {
            $temp['skilllevel'] = get_string('skill' . $customfielddata['edwskilllevel'], 'theme_remui');
        }

        $temp['totallessons'] = $sectioncount;
        $timezone = \core_date::get_user_timezone($USER);
        $temp['startdate'] = userdate($COURSE->startdate, get_string('strftimedate', 'langconfig'), $timezone);
        $langarray = \get_string_manager()->get_list_of_translations();
        $language = $langarray["en"];
        if ($COURSE->lang != "") {
            $language = $langarray[$COURSE->lang];
        }
        $temp['language'] = $language;

        $context['pricingsection'] = $temp;

        $context['relatedcourses'] = $this->get_related_courses ();
        $context['coursearcivecaturl'] = $CFG->wwwroot."/course/index.php?categoryid=".$COURSE->category;
        $context['latestcourses'] = $this->get_latest_courses();
        $context['hasrelatedcourses'] = get_config("theme_remui", 'showrelatedcourse');
        $context['haslatestcourses'] = get_config("theme_remui", 'showlatestcourse');
        $context['hasnarrowidth']   = (get_config("theme_remui", "pagewidth") == 'fullwidth') ? false : true;
        return $context;
    }

    /**
     * Course purchase details.
     * @param courseid
     * @return context
     */

    public function get_course_purchase_details($courseid) {
        global $PAGE;
        // Default data.
        $enroldata = array('courseprice' => '', 'hascost' => 0);
        $buttontext = get_string('enrolnow', 'theme_remui');

        // Return No cost if theme setting does not allow for each course.
        if (isset($PAGE->theme->settings->showcoursepricing) && $PAGE->theme->settings->showcoursepricing == 1) {
            $enroldata = $this->get_payment_details($courseid);
        }
        // Button text will be "Buy & Enrol now", if payment is active. Otherwise only 'Enrol Now'.
        if ($enroldata['hascost'] == 1 && $enroldata['courseprice'] != get_string('course_free', 'theme_remui')) {
            $buttontext = get_string('buyand', 'theme_remui') . $buttontext;
        }

        $contextdata = [];
        if ($enroldata['hascost'] == 1) {
            $contextdata['hascost'] = $enroldata['hascost'];
            $contextdata['courseprice'] = $enroldata['courseprice'];
            $contextdata['currency'] = $enroldata['currency'];
        }
        $contextdata['buttontext'] = $buttontext;

        return $contextdata;
    }

    /**
     * Generate payment details.
     * @param courseid
     * @return Array
     */

    public function get_payment_details($courseid) {
        global $PAGE;

        $enrolinstances = enrol_get_instances($courseid, true);
        $wdmenrolmentcosts = array();
        $wdmarrayofcosts = array();

        foreach ($enrolinstances as $key => $instance) {
            if (!empty($instance->cost)) {
                $wdmcost = $instance->cost;
                $wdmmethod = $instance->enrol;
                $wdmcurrency = !empty($instance->currency) ? $instance->currency : get_string('currency', 'theme_remui');
                /* @wdmBreak */
                $wdmenrolmentcosts[$wdmcost] = new \stdClass();

                if (strpos($wdmcost, '.')) {
                    $wdmenrolmentcosts[$wdmcost]->cost = number_format($wdmcost, 2, '.', '' );
                } else {
                    $wdmenrolmentcosts[$wdmcost]->cost = $wdmcost;
                }
                $wdmenrolmentcosts[$wdmcost]->currency = $wdmcurrency;
                $wdmenrolmentcosts[$wdmcost]->method = $wdmmethod;
                $wdmarrayofcosts[] = $wdmcost;
            }
        }

        $wdmcoursehascost = 0;
        $wdmcurrencydisplay = '';
        if (!empty($wdmenrolmentcosts)) {
            $wdmcoursehascost = 1;
            $i = 0;
            $wdmcoursepricedisplay = '';
            foreach ($wdmenrolmentcosts as $key => $cost) {
                $i++;
                $thelocale = 'en';
                $thecurrency = !empty($cost->currency) ? $cost->currency : get_string('currency', 'theme_edumy');
                if (class_exists('NumberFormatter')) {
                    /* Extended currency symbol */
                    $formatmagic = new \NumberFormatter($thelocale."@currency=$thecurrency", \NumberFormatter::CURRENCY);
                    $wdmextendedcurrencysymbol = $formatmagic->getSymbol(\NumberFormatter::CURRENCY_SYMBOL);
                    /* Short currency symbol */
                    $formatter = new \NumberFormatter($thelocale, \NumberFormatter::CURRENCY);
                    $formatter->setPattern('¤');
                    $formatter->setAttribute(\NumberFormatter::MAX_SIGNIFICANT_DIGITS, 0);
                    $formattedprice = $formatter->formatCurrency(0, $thecurrency);
                    $zero = $formatter->getSymbol(\NumberFormatter::ZERO_DIGIT_SYMBOL);
                    $wdmcurrencysymbol = str_replace($zero, '', $formattedprice);

                    $wdmenrolmentcosts[$key]->extendedCurrencySymbol = $wdmextendedcurrencysymbol;
                    $wdmenrolmentcosts[$key]->currencySymbol = $wdmextendedcurrencysymbol;

                } else {
                    $wdmenrolmentcosts[$key]->extendedCurrencySymbol = $thecurrency;
                    $wdmenrolmentcosts[$key]->currencySymbol = get_string('currency_symbol', 'theme_remui');
                }
                $wdmstring = '';
                if ($i > 1) {
                    $wdmstring = " / ";
                }
                $wdmcoursepricedisplay .= $wdmstring.$wdmenrolmentcosts[$key]->extendedCurrencySymbol . $wdmenrolmentcosts[$key]->cost;

                $wdmcurrencydisplay .= $wdmstring.$thecurrency;
            }
        } else if (isset($PAGE->theme->settings->enrolment_payment) && ($PAGE->theme->settings->enrolment_payment == 1)) {
            $wdmcoursepricedisplay = get_string('course_free', 'theme_remui');
            $wdmcoursehascost = 1;
        } else {
            $wdmcoursepricedisplay = '';
            $wdmcoursehascost = 0;
        }
        return array('courseprice' => $wdmcoursepricedisplay, 'hascost' => $wdmcoursehascost, 'currency' => $wdmcurrencydisplay);
    }

    public function get_related_courses () {
        global $COURSE, $OUTPUT;
        $hasnarrowidth = (get_config("theme_remui", "pagewidth") == 'fullwidth') ? false : true;
        $totalcount = false;
        $search = null;
        $category = $COURSE->category;
        $limitfrom = 0;
        $limitto = 10;
        $mycourses = null;
        $categorysort = null;
        $courses = [];
        $filtermodified = true;
        $recentcoursecardsdata = [
            "coursecards" => $this->get_enrolpage_courses($totalcount, $search, $category, $limitfrom, $limitto, $mycourses, $categorysort, $courses, $filtermodified)
        ];
        array_splice($recentcoursecardsdata['coursecards'], 4);
        if ($hasnarrowidth) {
            array_splice($recentcoursecardsdata['coursecards'], 3);
        }
        return $OUTPUT->render_from_template('theme_remui/enrol_page_coursecards', $recentcoursecardsdata);

    }

    public function get_latest_courses() {
        global $COURSE, $OUTPUT, $DB;
        $datacourse = $DB->get_records('course', null, $sort = 'id DESC', $fields = '*', $limitfrom = 0, $limitnum = 20);
        $totalcount = false;
        $search = null;
        $category = null;
        $limitfrom = 0;
        $limitto = 25;
        $mycourses = null;
        $categorysort = null;
        $courses = $datacourse;
        $filtermodified = true;
        $latestcoursecardsdata = [
            "coursecards" => $this->get_enrolpage_courses($totalcount, $search, $category, $limitfrom, $limitto, $mycourses, $categorysort, $courses, $filtermodified)
        ];
        $defaultcardlimit = 12;
        $cardsmaxlimit = 20;
        $coursecounts = get_config('theme_remui', 'latestcoursecount');
        if (is_numeric($coursecounts) && $coursecounts > 0 && $coursecounts <= $cardsmaxlimit) {
            $defaultcardlimit = $coursecounts;
        }
        if (is_numeric($coursecounts) && $coursecounts > 0 &&  $coursecounts >= $cardsmaxlimit) {
            $defaultcardlimit = $cardsmaxlimit;
        }
        array_splice($latestcoursecardsdata['coursecards'], $defaultcardlimit);
        return $OUTPUT->render_from_template('theme_remui/enrol_page_coursecards', $latestcoursecardsdata);
    }

    public function get_enrolpage_courses($totalcount, $search, $category, $limitfrom, $limitto, $mycourses, $categorysort, $courses, $filtermodified) {
        global  $COURSE;
        $coursehandler = new \theme_remui_coursehandler();
        $coursedata = $coursehandler->get_courses(
            $totalcount,
            $search,
            $category,
            $limitfrom,
            $limitto,
            $mycourses,
            $categorysort,
            $courses,
            $filtermodified
        );
        $allcourses = $coursedata;
        // Get Ratings and Review Context.
        $rnrshortdesign = '';
        if (is_plugin_available("block_edwiserratingreview")) {
            $rnr = new \block_edwiserratingreview\ReviewManager();
            unset($allcourses);
            foreach ($coursedata as $course) {
                $course['ernrshortdesign'] = $rnr->get_course_cardlayout_ratingdata($course['courseid']);
                $allcourses[$course['courseid']] = $course;
            }
        }
        unset($allcourses[$COURSE->id]);
        return $allcourses;
    }
}
