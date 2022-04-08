<div class="container">
    <div>
        <div class="title">
            <h2>Exercice 3</h2>
            <a href="/exo4">Exercice suivant</a>
        </div>

        <div class="elemContainer">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($twentyCustomers as $twentyCustomer){
                    echo '<tr><td>'.$twentyCustomer->id.'</td><td> '.$twentyCustomer->firstName.'</td><td> '.$twentyCustomer->lastName.'</td></tr>';
                }
                ?>
                </tbody>
            </table>
            
        </div>
    </div>
</div>