<?php 
include("header.php"); 
require("connect.php");

$log = $_POST['login'];
$mdp = $_POST['password'];

$requete_exp = $BDD -> query("SELECT exp_login, exp_password FROM experimenter WHERE exp_login = '$log' AND exp_password = '$mdp'");
$resultat_exp = $requete_exp -> fetch();

$requete_usr = $BDD -> query("SELECT usr_login, usr_password FROM user WHERE usr_login = '$log' AND usr_password = '$mdp'");
$resultat_usr = $requete_usr -> fetch();

if ($resultat_exp)
{
    session_start();
    $_SESSION['exp_login'] = $resultat_exp['exp_login'];
    $_SESSION['exp_password'] = $resultat_exp['exp_password'];
    header('Location: index.php');
}
elseif ($resultat_usr)
{
    session_start();
    $_SESSION['usr_login'] = $resultat_usr['usr_login'];
    $_SESSION['usr_password'] = $resultat_usr['usr_password'];
    header('Location: index.php');
}
else
{    
    $probleme = "erreur=nonexistant";
    header('Location: login.php?'.$probleme);
}

include("footer.php"); 
?>