<div class="container">
    <div>
    <div class="title">
            <h2>Exercice 7</h2>
            <a href="/home">Revenir au menu</a>
        </div>
        <div class="elemContainer" id="exo7">
            <table id="number7">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date de naissance</th>
                        <th>Carte de fidélité</th>
                        <th>Numéro de carte</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($clients as $client){
                    
                    if($client->cardNumber != NULL){
                        if($client->cardTypesId == '1'){
                            $check = 'Oui';
                        } else {
                            $check = 'Non';
                        }
                    } else {
                        $check = 'Non';
                    }

                    if($client->cardNumber != NULL){
                        $cardNumber = $client->cardNumber;
                    } else {
                        $cardNumber = 'Pas de carte';
                    }
                    echo '<tr><td>'.$client->lastName.
                    '</td><td>'.$client->firstName.
                    '</td><td>'.$client->birthDate.
                    '</td><td>'.$check.
                    '</td><td>'.$cardNumber.
                    '</td></tr>';
                }
                ?>
                </tbody>
            </table>
            
        </div>
        
    </div>
</div>