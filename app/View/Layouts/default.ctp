<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>Gestion des BTS SIO</title>
        <?php
        echo $this->Html->css('bootstrap');
        echo $this->Html->script(array('jquery-1.9.1', 'bootstrap', 'numbersonly'));

        echo $this->fetch('meta');
        ?>
    </head>
    <body>
        <!-- En-tête -->
        <div class="container">
            <div id="entete" class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container row">


                        <?php
                        echo $this->Html->link('Gestion BTS SIO', '/', array(
                            'class' => 'brand'
                                )
                        );
                        ?>
                        <div class="nav-collapse collapse ">
                            <ul class="nav ">
                                <li><?php echo $this->Html->link('Les étudiants', '/etudiants'); ?></li>
                                <li><?php echo $this->Html->link('Les CV', '/cv'); ?></li>
                                <li><a href="#">Les entreprises</a></li>
                                <li><a href="#">à propos</a></li>              
                            </ul>

                            <div class="pull-right">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <div class="btn-group">
                                            <button class="btn btn-warning" type="button"><i class="icon-user icon-white"></i> Accès Membre</button>
                                            <button data-toggle="dropdown" class="btn btn-warning dropdown-toggle" type="button"><span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <?php if (AuthComponent::user('id_utilisateur')): ?>
                                                    <li class="text-info">
                                                        <?php echo $this->Html->link(" Mon compte", array('action' => 'edit', 'controller' => 'Utilisateurs')); ?>
                                                    </li>
                                                    <li class="text-info">
                                                        <?php echo $this->Html->link(" Deconnexion", array('action' => 'logout', 'controller' => 'Utilisateurs')); ?>
                                                    </li>
                                                <?php else: ?>
                                                    <li class="text-info">
                                                        <?php echo $this->Html->link(" Inscription", array('action' => 'signup', 'controller' => 'Utilisateurs')); ?>
                                                    </li>
                                                    <li class="text-info">
                                                        <?php echo $this->Html->link(" Connexion", array('action' => 'login', 'controller' => 'Utilisateurs')); ?>
                                                    </li>
                                                </ul>
                                            <?php endif; ?>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contenu -->
        <div class="container clearfix">
            <?= $this->fetch('content') ?>
        </div>


        <!-- Pied de page -->
        <footer>

            <div id="basdepage" class="container">
                <div class="span4 offset4"> 
                    <a href="" class="">Mentions légales</a>
                </div>
            </div>
        </footer>
    </body>
</html>
