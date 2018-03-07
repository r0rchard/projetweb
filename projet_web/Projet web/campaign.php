<?php include("header.php");
require("connect.php");

$curseur = $BDD -> query( "SELECT * FROM campaign Order By camp_id" );

while ( $tuple = $curseur -> fetch() )
{    
    $id=$tuple["camp_id"];
    echo "<div class='well onmouse'>";
    echo "<h2><a href='start_campaign.php?id=$id'>".$tuple["camp_title"]."</a></h2>";
    echo "<p>".$tuple["camp_description"]."</p>";
    echo "<b>".$tuple["camp_experimenter"]."</b></div>";
}

include("footer.php");
?>