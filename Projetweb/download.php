<?php
require("connect.php");
$id = $_GET['user'];
$BDD -> exec ("SELECT answ_sur_id, answ_quest_id, answ_value FROM answer
WHERE answ_usr_id = $id
INTO OUTFILE 'test.csv' 
FIELDS ENCLOSED BY '\"' 
TERMINATED BY ';' 
ESCAPED BY '\"' 
LINES TERMINATED BY '\r\n'");
rename("C:\\xampp\mysql\data\projetweb\\test.csv","test".$id.".csv");
print "<a href='test".$id.".csv'>Télécharger</a>";
?>
