<?php include("header.php");
require("connect.php");

$curseur = $BDD -> query( "SELECT * FROM campaign Order By camp_id" );

while ( $tuple = $curseur -> fetch() )
{    
    $id=$tuple["camp_id"];    
    $curseur2 = $BDD -> query( "SELECT * FROM survey WHERE sur_camp_id = $id Order By sur_title" );    
    echo "<div class='well onmouse'>";
    echo "<h2>".$tuple["camp_title"]."</h2>";
    echo "<p>".$tuple["camp_description"]."</p>";
    while ( $tuple2 = $curseur2 -> fetch() )
    {        
        echo "<span class='survey'>".$tuple2["sur_title"]."</span><br />";
    }
    echo "<b>Expérimentateur(s) : ".$tuple["camp_experimenter"]."</b><br />";
    echo "<a href='start_campaign.php?id=$id'>Commencer</a></div>";
}

include("footer.php");
?>