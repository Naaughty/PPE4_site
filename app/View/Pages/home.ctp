<!DOCTYPE html>
<html xml:lang="fr" lang="fr">
    <body class="home">
        <div id="content">
            <div class="row">
                <div class="container">
                    <div class="hero-unit">
                        <h1>BTS SIO</h1>
                        <p>Bienvenue sur le site des bts sio!</p>
                        <p><span class="span6">Pour consulter les étudiants : </span><?php echo $this->Html->link('Les étudiants', '/etudiants', array('class'=>'btn btn-success')); ?></p> 
                        <p><span class="span6">Pour consulter les CV des étudiants : </span><?php echo $this->Html->link('Les CV', '/cv', array('class'=>'btn btn-primary')); ?></a></p>            
                        <p><span class="span6">Pour déposer une offre de stage : </span> <a href="#" class="btn btn-info">Les Entreprises</a></p>
                        <p><span class="text-error">Vous souhaitez vous connecter, utilisez le formulaire de la barre de menu  </span></p>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>