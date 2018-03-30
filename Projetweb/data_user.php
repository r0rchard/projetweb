<?php 
include("header.php");
require("connect.php");

$usr_id = $_GET['id'];
$curseur1 = $BDD -> query( "SELECT camp_title FROM campaign WHERE camp_id IN  
(SELECT sur_id FROM survey WHERE sur_id IN 
(SELECT answ_sur_id FROM answer WHERE answ_usr_id = ".$usr_id."))");
while($tuple = $curseur1 -> fetch())
{
    echo "<div class='well onmouse'><h2>".$tuple["camp_title"]."</h2>";
    $curseur2 = $BDD -> query( "SELECT sur_title FROM survey WHERE sur_id IN  
    (SELECT answ_sur_id FROM answer WHERE answ_usr_id = ".$usr_id.")");
    while($tuple = $curseur2 -> fetch())
    {
        echo "<div class='well onmouse'><strong>".$tuple["sur_title"]."</strong>";
        $curseur3 = $BDD -> query( "SELECT * FROM answer WHERE answ_usr_id = ".$usr_id."");
        while($tuple = $curseur3 -> fetch())
        {  
            echo "<div class='row'><div class='col-lg-3'>Question n°".$tuple["answ_quest_id"]."</div>";
            echo "<div class='col-lg-2'>Réponse : ".$tuple["answ_value"]."</div></div>";
        }
        echo "<br /><a href='download.php?user=".$usr_id."' class='btn btn-default btn-primary'>Télécharger</a></br>";   
    }
    
    echo "</div>";
    echo "</div>";
}

include("footer.php");
?>