<div class="container">
    <div>
        <div class="title">
            <h2>Exercice 2</h2>
            <a href="/exo3">Exercice suivant</a>
        </div>
        
        <div class="elemContainer">
            <?php
                $count = 0;
                foreach($showTypes as $showType){
                    echo '<div class="elem"><p>'.$showType->type.'</p></div>';
                    $count++;
                }
            ?>
        </div>
    </div>
</div>