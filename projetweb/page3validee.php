<?php
require("connect.php");


//$numeros = array();
for($k = 14; $k<29; $k++)
{
    $id = $k;
    $rep = $_POST[$id];
    print $id;
    print  $rep;
    print"</br>";
    $BDD -> exec( "UPDATE attrakdiffr
        SET r_valeur = '$rep' 
        WHERE (r_id = $id) " );     
} 
header('Location: page4.php');
exit;
?>