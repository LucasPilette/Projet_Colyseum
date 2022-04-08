<?php
    require_once(dirname(__FILE__) .'/../config/callPDO.php');

    $requestM = $pdo->prepare
    ("SELECT clients.firstName, clients.lastName
    FROM clients
    WHERE clients.lastName LIKE 'm%'
    ORDER BY clients.lastName;");
    $requestM->execute();
    $mClients = $requestM->fetchAll();

    include(dirname(__FILE__) .'/../views/templates/header.php');
    include(dirname(__FILE__) .'/../views/exo5.php');
    include(dirname(__FILE__) .'/../views/templates/footer.php');