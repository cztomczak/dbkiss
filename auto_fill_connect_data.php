<?php
/*
This script will automatically fill all of your connection
data in the log in form except for password.
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
    'db_pass' => '',
    'db_charset' => 'utf8',
    'page_charset' => 'utf-8',
    'remember' => 0
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