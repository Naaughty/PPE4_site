<br><br><br>
<div class="col-md-12 alert alert-block alert-info">
    Les champs accompagnés d'un * sont obligatoires
</div>
<div class="col-md-12 alert alert-block alert-info">
    Votre mot de passe ne doit être composer que de chiffres
</div>
<?php
    //Affichage du message si le compte est bien créé ou non
    echo $this->Session->Flash();


?>
<div class="container">
    <div class="hero-unit">
        <h2>S'enregistrer</h2>
        <br>
        <!-- Création du formulaire d'inscription -->
<?php echo $this->Form->create('Utilisateur'); ?>
    <?php echo $this->Form->input('identifiant', array('label'=>"Identifiant* : "));?>
    <?php echo $this->Form->input('mot_de_passe', array('label'=>"Mot de passe* : ", 'type'=>"password", 'onKeyPress'=>"return numbersonly(this, event)"));?>
    <?php echo $this->Form->input('courriel', array('label'=>"E-mail* : ", 'type'=>"email"));?>
    <?php echo $this->Form->input('nom', array('label'=>"Nom* : "));?>
    <?php echo $this->Form->input('prenom', array('label'=>"Prenom* : "));?>
    <?php echo $this->Form->input('adresse_rue', array('label'=>"Rue* : "));?>
    <?php echo $this->Form->input('adresse_cp', array('label'=>"Code postal* : "));?>
    <?php echo $this->Form->input('adresse_ville', array('label'=>"Ville* : "));?>
    <?php echo $this->Form->input('tel_personnel', array('label'=>"Telephone personnel : ", 'type'=>"tel"));?>
    <?php echo $this->Form->input('tel_professionnel', array('label'=>"Telephone professionnel : ", 'type'=>"tel"));?>
    <?php echo $this->Form->input('site_web', array('label'=>"Site Web : ", 'type'=>"url"));?>
    <?php echo $this->Form->input('annee_entree_promotion', array('label'=>"Année entrée promotion* : ", 'type'=>"text", 'onKeyPress'=>"return numbersonly(this, event)"));?>
    <?php echo $this->Form->input('annee_sortie_promotion', array('label'=>"Année sortie promotion* : ", 'type'=>"text", 'onKeyPress'=>"return numbersonly(this, event)"));?>
        

<?php echo $this->Form->end("S'enregistrer"); ?>
    </div>
</div>