<?php
require("connect.php");
for($k = 4; $k<14; $k++)
{
    $id = $k;
    $rep = $_POST[$id];
    print $id;
    print  $rep;
    print "</br>";
    $BDD -> exec( "UPDATE attrakdiffr
        SET r_valeur = '$rep' 
        WHERE (r_id = $id) " );    
}
header('Location: page3.php');
exit;
?>