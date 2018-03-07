<!doctype html>
<html>
    <?php
        session_start();
        require_once('connect.php');
    ?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <title>Test UX</title>
    </head>

    <body>
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- JavaScript Boostrap plugin -->
        <script src="js/bootstrap.min.js"></script>

        <div class="container">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-target">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-list-alt"></span> Test UX</a>                    
                    </div>
                    <?php if(isset($_SESSION['exp_login'])) { ?> 
                        <a href='add_campaign.php'>
                            <span class='navbar-text'>
                                <span class='glyphicon glyphicon-plus'></span> Ajouter une campagne
                            </span>
                        </a>
                        <a href='options_campaign.php'>
                            <span class='navbar-text'>
                                <span class='glyphicon glyphicon-cog'></span> Options de campagnes
                            </span>
                        </a>
                        <a href='data.php'>
                            <span class='navbar-text'>
                                <span class='glyphicon glyphicon-folder-close'></span> Analyse des données
                            </span>
                        </a>
                    <?php }                     
                        if(isset($_SESSION['usr_login'])) { ?> 
                        <a href='campaign.php'>
                            <span class='navbar-text'>
                                <span class='glyphicon glyphicon-pencil'></span> Campagnes de test
                            </span>
                        </a>
                        <a href='recap.php'>
                            <span class='navbar-text'>
                                <span class='	glyphicon glyphicon-tasks'></span> Récapitulatif de vos réponses
                            </span>
                        </a>
                    <?php } ?>
                    <div class="collapse navbar-collapse" id="navbar-collapse-target">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-user"></span>
                                    <?php 
                                        if(isset($_SESSION['usr_login'])) echo "Bonjour, ".($_SESSION['usr_login']). "<b class='caret'></b>";
                                        elseif(isset($_SESSION['exp_login'])) echo "Bonjour, ".($_SESSION['exp_login']). "<b class='caret'></b>";
                                        else echo "Non connecté <b class='caret'></b>";
                                    ?>
                                </a>

                                <ul class="dropdown-menu">
                                    <?php 
                                        if(isset($_SESSION['exp_login'])) echo "<li><a href='logout.php'>Se déconnecter</a></li>";
                                        elseif(isset($_SESSION['usr_login'])) echo "<li><a href='logout.php'>Se déconnecter</a></li>";
                                        else
                                        {
                                            echo "<li><a href='signin.php'>S'inscrire</a></li>";
                                            echo "<li><a href='login.php'>Se connecter</a></li>";
                                        }
                                    ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>