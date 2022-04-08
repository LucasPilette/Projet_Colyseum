
<div class="container">
    <div>
        <div class="title ">
            <h2>Exercice 1</h2>
            <a href="/exo2">Exercice suivant</a>
        </div>
        <div class="elemContainer">
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                foreach($customers as $customer){
                    echo '<tr><td>'.$customer->firstName.'</td><td>'.$customer->lastName.'</td></tr>';
                }
            ?>
                </tbody>
            </table>
        </div>
            
    </div>
</div>
