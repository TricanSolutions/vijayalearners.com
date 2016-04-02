<?php

$base_path = 'http://localhost/vijayatest';
$site_title = ':::VIJAYA LEARNERS:::';

//session_start();

# DATABASE CONNECTION

define('HOSTNAME', '127.0.0.1');
define('PORTNUM', '');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'vijaya_lerners');

$con = mysql_connect(HOSTNAME . ':' . PORTNUM, USERNAME, PASSWORD);
if ($con) {
    mysql_select_db(DATABASE,$con);
} else {
    //connection failed;
}