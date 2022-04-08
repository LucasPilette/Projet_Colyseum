<div class="container">
    <div>
    <div class="title">
            <h2>Exercice 7</h2>
            <a href="/home">Revenir au menu</a>
        </div>
        <div class="elemContainer" id="exo7">
            <?php
                foreach($clients as $client){
                    
                    if($client->cardNumber != NULL){
                        if($client->cardTypesId == '1'){
                            $check = 'oui';
                        } else {
                            $check = 'non';
                        }
                    } else {
                        $check = 'non';
                    }

                    if($client->cardNumber != NULL){
                        $cardNumber = $client->cardNumber;
                    } else {
                        $cardNumber = 'Pas de carte';
                    }
                    echo '<div class="elem" id="exo7Elem"><p> Nom : '.$client->lastName.
                    '<br> Prénom : '.$client->firstName.
                    '<br> Date de naissance : '.$client->birthDate.
                    '<br> Carte de fidélité : '.$check.
                    '<br> Numéro de carte : '.$cardNumber.
                    ' </p></div>';
                }
            ?>
        </div>
        
    </div>
</div>