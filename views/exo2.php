<?php
// Exo 2 

$requestShows = $pdo->prepare("SELECT * FROM showtypes ");
$requestShows-> execute();
$showTypes = $requestShows->fetchAll();

?>

<div class="container">
    <div>
        <div class="title">
            <h2>Exercice 2</h2>
            <a href="/exo3">Exercice suivant</a>
        </div>
        
        <div class="elemContainer">
            <?php
                foreach($showTypes as $showType){
                    echo '<div class="elem"><p>'.$showType['type'].'</p></div>';
                }
            ?>
        </div>
    </div>
</div>