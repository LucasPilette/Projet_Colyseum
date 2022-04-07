<?php
// Exo 4 

$requestFidelity = $pdo->prepare
("SELECT clients.firstName, clients.lastName
FROM clients
INNER JOIN cards
ON clients.cardNumber = cards.cardNumber
WHERE cards.cardTypesId = 1;");
$requestFidelity->execute();
$fidelityClients = $requestFidelity->fetchAll();

?>

<div class="container">
    <div>
    <div class="title">
            <h2>Exercice 4</h2>
            <a href="/exo5">Exercice suivant</a>
        </div>
        <div class="elemContainer" id="exo4">
            <?php
                foreach($fidelityClients as $fidelityClient){
                    echo '<div class="elem "><p>'.$fidelityClient['firstName'].' '.$fidelityClient['lastName'].'</p></div>';
                }
            ?>
        </div>
            
    </div>
</div>