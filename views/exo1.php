
<div class="container">
    <div>
        <div class="title ">
            <h2>Exercice 1</h2>
            <a href="/exo2">Exercice suivant</a>
        </div>
        <div class="elemContainer">
            <?php
                foreach($customers as $customer){
                    echo '<div class="elem"><p>'.$customer->firstName.'</p></div>';
                }
            ?>
        </div>
            
    </div>
</div>
