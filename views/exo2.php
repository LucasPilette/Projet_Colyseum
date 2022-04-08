<div class="container">
    <div>
        <div class="title">
            <h2>Exercice 2</h2>
            <a href="/exo3">Exercice suivant</a>
        </div>
        
        <div class="elemContainer">
        <table>
                <thead>
                    <tr>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($showTypes as $showType){
                        echo '<tr><td>'.$showType->type.'</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
            
        </div>
    </div>
</div>