<?php
    require_once(dirname(__FILE__) .'/../config/callPDO.php');

    $requestClient = $pdo->prepare
    ("SELECT clients.firstName, clients.lastName, clients.birthDate,cards.cardTypesId,clients.cardNumber
    FROM clients
    LEFT OUTER JOIN cards
    ON clients.cardNumber = cards.cardNumber;");
    $requestClient->execute();
    $clients = $requestClient->fetchAll();

    include(dirname(__FILE__) .'/../views/templates/header.php');
    include(dirname(__FILE__) .'/../views/exo7.php');
    include(dirname(__FILE__) .'/../views/templates/footer.php');