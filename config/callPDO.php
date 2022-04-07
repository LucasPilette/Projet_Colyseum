<?php 

require_once(dirname(__FILE__) .'/../config/constInit.php');

try {
    $pdo = new PDO(DSN, USER,PASSWORD,array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ));
} catch (Exception $e){
    die('Erreur :'.$e->getMessage());
}