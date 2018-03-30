<?php 
include("header.php");
require("connect.php");

$curseur = $BDD -> query( "SELECT * FROM campaign Order By camp_id" );
while ( $tuple = $curseur -> fetch() )
{    
    $camp_id=$tuple["camp_id"];    
    $curseur2 = $BDD -> query( "SELECT * FROM survey WHERE sur_camp_id = $camp_id AND sur_invitation = 'Anonyme' Order By sur_id" );    
    echo "<div class='well onmouse'>";
    echo "<h2>".$tuple["camp_title"]."</h2>";
    echo "<p>Description : ".$tuple["camp_description"]."</p>";
    while ( $tuple2 = $curseur2 -> fetch() )
    {   
        $sur_id=$tuple2["sur_id"];
        if ($tuple2["sur_type"] == "AttrakDiff")     
        echo "<a href='attrakdiff.php?sur_id=$sur_id' class='btn btn-default btn-primary'>".$tuple2["sur_title"]."</a><br /><br />";
    }
    echo "<b>Expérimentateur•rice•s) : ".$tuple["camp_experimenter"]."</b></div>";
}

include("footer.php");
?>