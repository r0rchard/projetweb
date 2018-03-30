<?php
require("connect.php");

for($k = 20; $k<=28; $k++)
{
    $id = $k;
    $rep = $_POST[$id];

    $BDD -> exec( "UPDATE attrakdiffa
        SET answ_value = '$rep' 
        WHERE (answ_quest_id = $id) " );    
}

header('Location: index.php');
?>