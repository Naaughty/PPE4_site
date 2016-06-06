<?php echo '<head>' . $this->Html->css('tableau') . '</head>'; ?>
<div class="container">
    <div class="hero-unit">
        <h2>Se connecter</h2>
        <br>
        <div class="container"> 
            <section class="row">
                <?php echo $this->Form->create('Utilisateur'); ?>
                <?php echo $this->Form->input('identifiant', array('label' => "Identifiant : ")); ?>
                <?php echo $this->Form->input('mot_de_passe', array('label' => "Mot de passe : ", 'type' => "password")); ?>
                <?php
                $tableau = $this->requestAction(array('controller' => 'Utilisateurs',
                    'action' => 'tableauAleatoire'
                ));

                echo '<table cellspacing="0">';
                echo '<tbody>';
                for ($i = 0; $i < 5; $i++) {
                    echo '<tr>';
                    for ($j = 0; $j < 5; $j++) {
                        echo '<td>';
                        echo '<strong>' . $tableau[$i * 5 + $j] . '</strong>' . '</td>';
                    }
                    echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
                ?>
                <?php echo $this->Form->end("Se connecter"); ?>
            </section>
        </div>

    </div>
</div>
