<?php

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://localhost/CMS');
    
$db = new PDO('mysql:host=127.0.0.1;dbname=cms;encoding=utf-8', 'root', '');
$db -> query ('SET NAMES utf8');
$db -> query ('SET CHARACTER_SET utf8_unicode_ci');

require 'functions.php';
?>

<?php
//    $db_config = array(
//        'host' => 'localhost',
//        'port' => '3306',
//        'user' => 'root',
//        'pass' => '',
//        'db' => 'mwk',
//        'db_type' => 'mysql',
//        'encoding' => 'utf-8'
//    );
//
//
//    try
//    {
//     $dsn = $db_config['db_type'] .
//     ':host=' . $db_config['host'] .
//     ';port=' . $db_config['port'] .
//     ';encoding=' . $db_config['encoding'] .
//     ';dbname=' . $db_config['db'];
//
//     // tworzymy obiekt klasy PDO inicjując tym samym połączenie
//     $dbh = new PDO($dsn, $db_config['user'],  $db_config['pass']);
?>