<?php
    require_once(dirname(__FILE__) .'/../config/callPDO.php');

$requestShows = $pdo->prepare("SELECT * FROM showtypes ");
$requestShows-> execute();
$showTypes = $requestShows->fetchAll();

    include(dirname(__FILE__) .'/../views/templates/header.php');
    include(dirname(__FILE__) .'/../views/exo2.php');
    include(dirname(__FILE__) .'/../views/templates/footer.php');