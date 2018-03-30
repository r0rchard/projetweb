<?php 
include("header.php");
?>   

<h2 class="text-center">Inscription</h2>      
    <div class="well">
        <form class="form-signin form-horizontal" role="form" action="inscription.php" method="post">
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <input type="text" name="login" class="form-control" placeholder="Entrez votre login" required autofocus>
                </div>
            </div>                
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <input type="password" name="password" class="form-control" placeholder="Entrez votre mot de passe" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <input type="password" name="confirmed" class="form-control" placeholder="Confirmez votre mot de passe" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-log-in"></span> S'inscrire</button>
                    <?php
                        $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
                        if(array_key_exists('erreur',$_GET) && $_GET['erreur']=='login')
                        {
                            if($pageWasRefreshed) header('Location: signin.php');
                            else echo "<br/><br/><p class='text-center error'>Ce login est déjà utilisé.</p>";
                        }
                        elseif(array_key_exists('erreur',$_GET) && $_GET['erreur']=='password')
                        {
                            if($pageWasRefreshed) header('Location: signin.php');
                            else echo "<br/><br/><p class='text-center error'>Erreur de confirmation dans le mot de passe.</p>";
                        }
                    ?>
                </div>
            </div>
        </form>
    </div>

<?php include("footer.php"); ?>