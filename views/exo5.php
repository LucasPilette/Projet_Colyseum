<div class="container">
    <div>
    <div class="title">
            <h2>Exercice 5</h2>
            <a href="/exo6">Exercice suivant</a>
        </div>
        <div class="elemContainer" id="exo5">
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($mClients as $mClient){
                    echo '<tr><td>'.$mClient->firstName.'</td><td>'.$mClient->lastName.'</td></tr>';
                }
            ?>
                </tbody>
            </table>
            
        </div>
            
    </div>
</div>