<?php
require("connect.php");

$sur_id = $_GET['sur_id'];
$usr_id = $_GET['usr_id'];

for($k = 11; $k <= 19; $k++)
{
    $id = $k;
    $rep = $_POST['' . $id . ''];    
    
    $BDD -> exec( "DELETE FROM answer WHERE answ_usr_id = '$usr_id' AND answ_sur_id = '$sur_id' AND answ_quest_id = '$id'" );
    $BDD -> exec( "INSERT INTO answer (answ_usr_id, answ_sur_id, answ_quest_id, answ_value) VALUES ('$usr_id', '$sur_id', '$id', '$rep')" );    
}

header("Location: attrakdiffq3.php?sur_id=" . $sur_id . "&usr_id=" . $usr_id . "");
?>