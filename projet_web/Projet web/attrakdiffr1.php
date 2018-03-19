<?php
require("connect.php");

for($k = 1; $k<=10; $k++)
{
    $id = $k;
    $rep = $_POST[$id];

    $BDD -> exec( "UPDATE attrakdiffa
        SET answ_value = '$rep' 
        WHERE (answ_quest_id = $id) " );    
}

header('Location: attrakdiffq2.php');
?>