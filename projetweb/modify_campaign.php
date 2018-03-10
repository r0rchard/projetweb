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

include("footer.php");
?>