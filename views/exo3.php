<div class="container">
    <div>
        <div class="title">
            <h2>Exercice 3</h2>
            <a href="/exo4">Exercice suivant</a>
        </div>

        <div class="elemContainer">
            <?php
                foreach($twentyCustomers as $twentyCustomer){
                    echo '<div class="elem"><p>'.$twentyCustomer->id.' : '.$twentyCustomer->firstName.'</p></div>';
                }
            ?>
        </div>
    </div>
</div>