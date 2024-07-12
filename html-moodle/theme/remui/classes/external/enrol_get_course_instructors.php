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
 * Get course stats service
 *
 * @package   theme_remui
 * @copyright (c) 2023 WisdmLabs (https://wisdmlabs.com/) <support@wisdmlabs.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace theme_remui\external;

defined('MOODLE_INTERNAL') || die;

use external_function_parameters;
use external_value;
use external_single_structure;
use external_multiple_structure;

require_once($CFG->libdir . '/completionlib.php');

/**
 * Get course stats trait
 * @copyright (c) 2022 WisdmLabs (https://wisdmlabs.com/) <support@wisdmlabs.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
trait enrol_get_course_instructors {
    /**
     * Describes the parameters for enrol_get_course_instructors
     * @return external_function_parameters
     */
    public static function enrol_get_course_instructors_parameters() {
        return new external_function_parameters(
            array (
                'courseid' => new external_value(PARAM_INT, 'Course Id'),
            )
        );
    }

    /**
     * Save order of sections in array of configuration format
     * @param  int $courseid Course id
     * @return boolean       true
     */
    public static function enrol_get_course_instructors($courseid) {
        global $PAGE, $OUTPUT,$CFG;
        // Validation for context is needed.
        $systemcontext = \context_system::instance();
        self::validate_context($systemcontext);

        $context = \context_course::instance($courseid);
        $teachers = get_enrolled_users($context, 'mod/folder:managefiles', 0, '*', 'firstname');

        $instructors = [];

        foreach ($teachers as $key => $teacher) {
            $usercourses = enrol_get_users_courses($teacher->id, $onlyactive = false, $fields = null, $sort = null);
            $totalstudents = 0;
            $totalcourses = 0;
            foreach ($usercourses as $key => $usercourse) {
                $tempcontext = \context_course::instance($usercourse->id);
                if (is_enrolled($tempcontext, $teacher->id, 'mod/folder:managefiles', false)) {
                    $totalstudents += count_enrolled_users($tempcontext, 'mod/quiz:attempt');
                    $totalcourses++;
                }
            }
            $instructor = [];
            $instructor['id'] = $teacher->id;
            $instructor['fullname'] = fullname($teacher, true);
            $instructor['avatar'] = $OUTPUT->user_picture($teacher);
            $instructor['totalstudents'] = $totalstudents;
            $instructor['totalcourses'] = $totalcourses;
            $instructor['profileurl'] = $CFG->wwwroot.'/user/profile.php?id='.$teacher->id;
            $instructors[] = $instructor;
        }

        return array("instructors" => $instructors);
    }

    /**
     * Describes the enrol_get_course_instructors return value
     * @return external_value
     */
    public static function enrol_get_course_instructors_returns() {
        return new external_single_structure (
            array(
                'instructors' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_INT, 'Instructor id'),
                            'fullname' => new external_value(PARAM_TEXT, 'Instructor Full Name'),
                            'avatar' => new external_value(PARAM_RAW, 'Instructor Avatar'),
                            'totalstudents' => new external_value(PARAM_INT, 'Instructor id'),
                            'totalcourses' => new external_value(PARAM_INT, 'Instructor id'),
                            'profileurl'   => new external_value(PARAM_TEXT, 'Instructor url'),
                        )
                    )
                )
            )
        );
    }
}
