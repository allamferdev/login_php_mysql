<?php

session_start();

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DATABASE', 'sislogin');

$conn = new MySQLi(HOST,USER, PASS, DATABASE);
