<?php
    require_once(dirname(__FILE__) .'/../config/callPDO.php');

    $requestEvents = $pdo->prepare
    ("SELECT shows.title, shows.performer, shows.date, shows.startTime
    FROM shows
    ORDER BY shows.title;");
    $requestEvents->execute();
    $events = $requestEvents->fetchAll();

    include(dirname(__FILE__) .'/../views/templates/header.php');
    include(dirname(__FILE__) .'/../views/exo6.php');
    include(dirname(__FILE__) .'/../views/templates/footer.php');