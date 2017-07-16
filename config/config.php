<?php
  ini_set('display_errors', 1);
  define('DATABASE_NAME', 'creators_hive_login');
  define('DATABASE_USER', 'root');
  define('DATABASE_PASSWORD', 'root');
  define('DATABASE_HOST', 'localhost');
  define('PDO_DSN','mysql:dbname=' . DATABASE_NAME .';host=' . DATABASE_HOST . '; charset=utf8');

  define('SITE_URL', 'http://192.168.9.34/php_lesson_3/public_html/');

  require_once('../lib/function.php');
  require_once('autoload.php');

  session_start();
