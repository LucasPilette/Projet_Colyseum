<div class="container">
    <div>
        <div class="title">
            <h2>Exercice 6</h2>
            <a href="/exo7">Exercice suivant</a>
        </div>
        <div class="elemContainer" id="exo6">
            <table>
                <thead>
                    <tr>
                        <th>Phrase</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($events as $event){
                    echo '<tr><td>'.$event->title.' par '.$event->performer.' le '.$event->date.' à '.$event->startTime.'</td></tr>';
                }
                ?>
                </tbody>
            </table>
            
        </div>
            
    </div>
</div>