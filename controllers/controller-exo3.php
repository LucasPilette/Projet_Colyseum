<?php
    require_once(dirname(__FILE__) .'/../config/callPDO.php');
    
    $requestTwenty = $pdo->prepare("SELECT * FROM clients WHERE clients.id <= 20");
    $requestTwenty-> execute();
    $twentyCustomers = $requestTwenty->fetchAll();

    include(dirname(__FILE__) .'/../views/templates/header.php');
    include(dirname(__FILE__) .'/../views/exo3.php');
    include(dirname(__FILE__) .'/../views/templates/footer.php');