<?php
require("connect.php");
$id = $_GET['camp'];
$BDD -> exec ("SELECT answ_sur_id, answ_quest_id, answ_usr_id, answ_value FROM answer
WHERE answ_sur_id = $id
INTO OUTFILE 'test.csv' 
FIELDS ENCLOSED BY '\"' 
TERMINATED BY ';' 
ESCAPED BY '\"' 
LINES TERMINATED BY '\r\n'");
rename("C:\\xampp\mysql\data\projetweb\\test.csv","campagne".$id.".csv");
print "<a href='campagne".$id.".csv'>Télécharger</a>";
?>
