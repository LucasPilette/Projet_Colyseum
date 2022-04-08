<div class="container">
    <div>
        <div class="title">
            <h2>Exercice 6</h2>
            <a href="/exo7">Exercice suivant</a>
        </div>
        <div class="elemContainer" id="exo6">
            <?php
                foreach($events as $event){
                    echo '<div class="elem" id="exo6Elem"><p>'.$event->title.' par '.$event->performer.' le '.$event->date.' à '.$event->startTime.'</p></div>';
                }
            ?>
        </div>
            
    </div>
</div>