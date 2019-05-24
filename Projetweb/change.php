<?php 
include("header.php");
require("connect.php");
$sur_id = $_GET['camp'];
$usr_id = $_GET['user'];
$question = $_POST['question'];
$valeur = $_POST['reponse'];
$BDD -> exec ("UPDATE answer
SET answ_value = '$valeur'  
WHERE `answ_usr_id`= $usr_id AND `answ_sur_id` = (SELECT `camp_id` FROM `campaign` WHERE `camp_title`='$sur_id') AND `answ_quest_id` = $question;
");
echo "<div class='well onmouse'>";
print "<a href = 'data_user.php?id=".$usr_id."' class='btn btn-default btn-primary'> retour aux résultats </a>";
print " </div>";
include("footer.php");
?>