<?php 
include("header.php"); 
require("connect.php");
?>   

<div class="well">
    <h3 class="text-center">Votre compte a bien été créé.</h3>
</div>

<?php
$log=$_POST['login'];
$mdp=$_POST['password'];
$mdp2=$_POST['confirmed'];

$requete_exp = $BDD -> query("SELECT exp_login FROM experimenter WHERE exp_login = '$log'");
$resultat_exp = $requete_exp -> fetch();

$requete_usr = $BDD -> query("SELECT usr_login FROM user WHERE usr_login = '$log'");
$resultat_usr = $requete_usr -> fetch();

if($resultat_usr || $resultat_exp)
{
    $probleme = "erreur=login";
    header('Location: signin.php?'.$probleme);
}
elseif($mdp != $mdp2)
{
    $probleme = "erreur=password";
    header('Location: signin.php?'.$probleme);
}
else
{
    require("connect.php");
    $BDD -> exec( "INSERT INTO user(usr_login, usr_password) VALUES('$log', '$mdp')" );
    session_start();
    $_SESSION['usr_login'] = $log;
    $_SESSION['usr_password'] = $mdp;
    header('Location: index.php');
}

include("footer.php"); 
?>