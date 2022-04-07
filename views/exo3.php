<?php
// Exo 3 

$requestTwenty = $pdo->prepare("SELECT * FROM clients WHERE clients.id <= 20");
$requestTwenty-> execute();
$twentyCustomers = $requestTwenty->fetchAll();

?>

<div class="container">
    <div>
        <div class="title">
            <h2>Exercice 3</h2>
            <a href="/exo4">Exercice suivant</a>
        </div>

        <div class="elemContainer">
            <?php
                foreach($twentyCustomers as $twentyCustomer){
                    echo '<div class="elem"><p>'.$twentyCustomer->id.' : '.$twentyCustomer->firstName.'</p></div>';
                }
            ?>
        </div>
    </div>
</div>