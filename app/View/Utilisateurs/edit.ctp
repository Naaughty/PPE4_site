<div class="container">
    <div class="hero-unit">
        <h2>Editer mon profil</h2>
        <br>
        <!-- Création du formulaire d'édition -->
        <?php echo $this->Form->create('Utilisateur'); ?>
        <?php echo $this->Form->input('identifiant', array('label' => "Identifiant* : ", 'value' => $donnees['identifiant'])); ?>
        <?php echo $this->Form->input('mot_de_passe1', array('label' => "Mot de passe* : ", 'type' => "password", 'onKeyPress' => "return numbersonly(this, event)")); ?>
        <?php echo $this->Form->input('mot_de_passe2', array('label' => "Confirmation mot de passe* : ", 'type' => "password", 'onKeyPress' => "return numbersonly(this, event)")); ?>    
        <?php echo $this->Form->input('courriel', array('label' => "E-mail* : ", 'type' => "email", 'value' => $donnees['courriel'])); ?>
        <?php echo $this->Form->input('nom', array('label' => "Nom* : ", 'value' => $donnees['nom'])); ?>
        <?php echo $this->Form->input('prenom', array('label' => "Prenom* : ", 'value' => $donnees['prenom'])); ?>
        <?php echo $this->Form->input('adresse_rue', array('label' => "Rue* : ", 'value' => $donnees['adresse_rue'])); ?>
        <?php echo $this->Form->input('adresse_cp', array('label' => "Code postal* : ", 'value' => $donnees['adresse_cp'])); ?>
        <?php echo $this->Form->input('adresse_ville', array('label' => "Ville* : ", 'value' => $donnees['adresse_ville'])); ?>
        <?php echo $this->Form->input('tel_personnel', array('label' => "Telephone personnel : ", 'type' => "tel", 'value' => $donnees['tel_personnel'])); ?>
        <?php echo $this->Form->input('tel_professionnel', array('label' => "Telephone professionnel : ", 'type' => "tel", 'value' => $donnees['tel_professionnel'])); ?>
        <?php echo $this->Form->input('site_web', array('label' => "Site Web : ", 'type' => "url", 'value' => $donnees['site_web'])); ?>
        <?php echo $this->Form->input('annee_entree_promotion', array('label' => "Année entrée promotion* : ", 'type' => "text", 'onKeyPress' => "return numbersonly(this, event)", 'value' => $donnees['annee_entree_promotion'])); ?>
        <?php echo $this->Form->input('annee_sortie_promotion', array('label' => "Année sortie promotion* : ", 'type' => "text", 'onKeyPress' => "return numbersonly(this, event)", 'value' => $donnees['annee_sortie_promotion'])); ?>


        <?php echo $this->Form->end("Modifier"); ?>
    </div>
</div>

