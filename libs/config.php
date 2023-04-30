<?php

// set session
// session_cache_expire(300);
// session_start();

// set timezone
date_default_timezone_set('Asia/Jakarta');

// set database connection
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'php_mvc';

// set global connection
$global_connection = mysqli_connect($host, $user, $pass, $database);

// set global variable
$global_protocol    = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://");
$global_www            = (substr($_SERVER['HTTP_HOST'], 0, 4) === 'www.' ? 'www.' : '');
$base_url = $global_protocol . $global_www . 'localhost/PHP-Native/';
