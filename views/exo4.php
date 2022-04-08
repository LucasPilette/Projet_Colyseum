<div class="container">
    <div>
    <div class="title">
            <h2>Exercice 4</h2>
            <a href="/exo5">Exercice suivant</a>
        </div>
        <div class="elemContainer" id="exo4">
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($fidelityClients as $fidelityClient){
                        echo '<tr><td>'.$fidelityClient->firstName.'</td><td>'.$fidelityClient->lastName.'</td></tr>';
                    }
                ?>
                </tbody>
            </table>
            
        </div>
            
    </div>
</div>