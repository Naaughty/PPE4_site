<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>Gestion des BTS SIO</title>
        <script>
            function numbersonly(e, decimal)
            {
                var key;
                var keychar;

                if (window.event)
                    key = window.event.keyCode;
                else if (e)
                    key = e.which;
                else
                    return true;

                keychar = String.fromCharCode(key);

                if ((key == null) || (key == 0) || (key == 8) || (key == 9) || (key == 13) || (key == 27))
                    return true;
                else if ((("0123456789").indexOf(keychar) > -1))
                    return true;
                else if (decimal && (keychar == "."))
                    return true;
                else
                    return false;
            }
        </script>
        <?php
        echo $this->fetch('script');
        echo $this->Html->css('bootstrap');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        ?>
    </head>
    <body>
        <!-- En-tête -->
        <div class="container">
            <div id="entete" class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container row">

                        <a class="brand" href="#">Gestion BTS SIO</a>
                        <div class="nav-collapse collapse ">
                            <ul class="nav ">
                                <li><a href="#">Les étudiants</a></li>
                                <li><a href="#">Les cv</a></li>
                                <li><a href="#">Les entreprises</a></li>
                                <li><a href="#">à propos</a></li>              
                            </ul>
                        </div><!--/.nav-collapse -->
                        <div class="pull-right">
                            <div class="btn-group ">

                                <a class="btn btn-warning dropdown-toggle span2" href="#">
                                    <i class="icon-user icon-white"></i> Accès Membre <i class="caret icon-white"></i>
                                </a>                  
                                <ul class="dropdown-menu">
                                    <li class="text-info">
                                        <a href="#connexionModale" role="button" data-toggle="modal"><i class="icon-ok-sign"></i> Connexion</a>                 
                                    </li>
                                </ul>                    
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

</html>
