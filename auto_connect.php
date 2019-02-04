<?php
/*
This script will automatically connect to given database,
so you don't have to fill the data on the connect screen
anymore. This can be useful on a developer machine, or if
you already have a directory protection and asking for
password again is not required.
*/

define('COOKIE_PREFIX', str_replace('.php', '', basename(__FILE__)).'_');

// You may rename the default 'dbkiss_sql' directory to
// e.g. 'dbkiss_pgsql' by setting 'DBKISS_SQL_DIR' constant.
define('DBKISS_SQL_DIR', 'dbkiss_sql');

$cookie = array(
    'db_driver' => 'pgsql',
    'db_server' => '127.0.0.1',
    'db_name' => 'test1',
    'db_user' => 'test1',
    'db_pass' => 'test1',
    'db_charset' => 'utf8',
    'page_charset' => 'utf-8',
    'remember' => 1
);

foreach ($cookie as $k => $v) {
    if ('db_pass' == $k) { $v = base64_encode($v); }
    $k = COOKIE_PREFIX.$k;
    if (!isset($_COOKIE[$k])) {
        $_COOKIE[$k] = $v;
    }
}

require './dbkiss.php';

?>