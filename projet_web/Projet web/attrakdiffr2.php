<?php
require("connect.php");

for($k = 11; $k<=19; $k++)
{
    $id = $k;
    $rep = $_POST[$id];

    $BDD -> exec( "UPDATE attrakdiffa
        SET answ_value = '$rep' 
        WHERE (answ_quest_id = $id) " );    
}

header('Location: attrakdiffq3.php');
?>