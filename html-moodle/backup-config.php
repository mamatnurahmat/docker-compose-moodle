<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '34.101.104.245';
$CFG->dbname    = 'edubase';
$CFG->dbuser    = 'postgres';
$CFG->dbpass    = 'CwkP6xJreaJh8dh6';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 5432,
  'dbsocket' => '',
);

$CFG->wwwroot   = 'https://belajar.edutez.id';
$CFG->dataroot  = '/var/www/moodledata3/edutezmd';
$CFG->admin     = 'admin';
$CFG->sslproxy  = 1;

$CFG->directorypermissions = 0777;

// X Send File
//$CFG->xsendfile = 'X-Accel-Redirect';
//$CFG->xsendfilealiases = array(
//    '/dataroot/' => $CFG->dataroot
//);

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
// skrip untuk debuging error
// ini_set ('display_errors', 'on');
// ini_set ('log_errors', 'on');
// ini_set ('display_startup_errors', 'on');
// ini_set ('error_reporting', E_ALL);
// $CFG->debug = 30719; // DEBUG_ALL, but that constant is not defined here.

