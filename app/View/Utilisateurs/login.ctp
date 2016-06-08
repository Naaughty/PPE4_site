<?php echo '<head>' . $this->Html->css('tableau') . '</head>'; ?>
<?php echo $this->Session->Flash();?>
<div class="container">
    <div class="hero-unit">
        <h2>Se connecter</h2>
        <br>
        <div class="container"> 
            <section class="row">
                <?php if(isset($authUser)){
                    //debug($authUser);
                } ?>
                <!-- Création du formulaire de connexion -->
                <?php echo $this->Form->create('Utilisateur'); ?>
                <?php echo $this->Form->input('identifiant', array('label' => "Identifiant : ")); ?>
                <?php echo $this->Form->password('mot_de_passe', array('id' => 'mdp', 'label' => "Mot de passe : ", 'type' => "password", 'readonly'=> 'readonly', 'value' => '')); ?>
                <?= '<button id="reset_mdp" type="button" class="btn btn-default"> <span class="icon-remove" aria-hidden="true"></span></button>'; ?>
                <?php
                //On appelle la fonction tableauAleatoire()
                $tableau = $this->requestAction(array('controller' => 'Utilisateurs',
                    'action' => 'tableauAleatoire'
                ));

                echo '<table cellspacing="0">';
                echo '<tbody>';
                for ($i = 0; $i < 5; $i++) {
                    echo '<tr>';
                    for ($j = 0; $j < 5; $j++) {
                        echo '<td class="case">';
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

<script>
$( document ).ready(function() {
    $('#reset_mdp').click(function() {
        $('#mdp').attr('value', '');
    })
    
    $('.case').click(function() {
        $('#mdp').attr('value',  $('#mdp').attr('value') + $(this).text() );
    });
});
</script>
