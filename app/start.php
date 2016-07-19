<?php

ini_set('display_errors', 'On');

//define('APP_ROOT', __DIR__);
//define('VIEW_ROOT', APP_ROOT . '/views');
//define('BASE_URL', 'http://localhost/Bundesliga');
  
try {

    $pdo = new PDO('mysql:host=127.0.0.1;dbname=bundesliga;encoding=utf-8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );

} catch( PDOException $e ) {

    echo 'ERROR: ' . $e->getMessage();

}