<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'my-db-instance.ch9ddyknahs1.ap-northeast-1.rds.amazonaws.com';
$CFG->dbname    = 'my_database';
$CFG->dbuser    = 'db_user';
$CFG->dbpass    = 'ca2015mi';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
);

$CFG->wwwroot   = 'http://moodle.kingcaven.com';
$CFG->dataroot  = '/data/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!