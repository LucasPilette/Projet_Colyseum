<?php
    require_once(dirname(__FILE__) .'/../config/callPDO.php');



$requestName = $pdo->prepare("SELECT * FROM clients");
$requestName->execute();
$customers = $requestName->fetchAll();



    include(dirname(__FILE__) .'/../views/templates/header.php');
    include(dirname(__FILE__) .'/../views/exo1.php');
    include(dirname(__FILE__) .'/../views/templates/footer.php');