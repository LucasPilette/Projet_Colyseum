<?php
// Exo 5 

$requestM = $pdo->prepare
("SELECT clients.firstName, clients.lastName
FROM clients
WHERE clients.lastName LIKE 'm%'
ORDER BY clients.lastName;");
$requestM->execute();
$mClients = $requestM->fetchAll();

?>

<div class="container">
    <div>
    <div class="title">
            <h2>Exercice 5</h2>
            <a href="/exo6">Exercice suivant</a>
        </div>
        <div class="elemContainer" id="exo5">
            <?php
                foreach($mClients as $mClient){
                    echo '<div class="elem" id="exo5Elem"><p> Nom : '.$mClient->firstName.'<br> Prénom : '.$mClient->lastName.'</p></div>';
                }
            ?>
        </div>
            
    </div>
</div>