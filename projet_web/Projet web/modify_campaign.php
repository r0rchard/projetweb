<?php include("header.php");

require("connect.php");
$id=$_GET['id'];
$curseur = $BDD -> query( "SELECT * FROM campaign WHERE camp_id=$id" );

if ( $tuple = $curseur -> fetch() )
{
    echo "<div class='well onmouse'>";
    echo "<h2>".$tuple["camp_title"]."</h2>";
    echo "<p>".$tuple["camp_description"]."</p>";
    echo "<b>".$tuple["camp_experimenter"]."</b></div>";
}

echo "<ol>Souhaitez vous :";
echo "<li>Modifiez le titre de cette campagne ?</li>";
echo "<li>Modifiez la description de cette campagne ?</li>";
echo "<li>Modifiez le nom du ou des expérimentateurs de cette campagne ?</li>";
echo "<li><a href='add_survey.php?id=$id'>Ajouter un questionnaire</a></li>";
echo "<li>Supprimer un questionnaire ?</li>";
echo "</ol>";

include("footer.php"); 
?>