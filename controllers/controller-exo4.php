<?php
    require_once(dirname(__FILE__) .'/../config/callPDO.php');

    $requestFidelity = $pdo->prepare
    ("SELECT clients.firstName, clients.lastName
    FROM clients
    INNER JOIN cards
    ON clients.cardNumber = cards.cardNumber
    WHERE cards.cardTypesId = 1;");
    $requestFidelity->execute();
    $fidelityClients = $requestFidelity->fetchAll();

    include(dirname(__FILE__) .'/../views/templates/header.php');
    include(dirname(__FILE__) .'/../views/exo4.php');
    include(dirname(__FILE__) .'/../views/templates/footer.php');