<div class="container">
    <div>
    <div class="title">
            <h2>Exercice 4</h2>
            <a href="/exo5">Exercice suivant</a>
        </div>
        <div class="elemContainer" id="exo4">
            <?php
                foreach($fidelityClients as $fidelityClient){
                    echo '<div class="elem "><p>'.$fidelityClient->firstName.' '.$fidelityClient->lastName.'</p></div>';
                }
            ?>
        </div>
            
    </div>
</div>