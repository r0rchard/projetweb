<?php include("header.php");
require("connect.php");

$curseur = $BDD -> query( "SELECT * FROM campaign Order By camp_id" );


while ( $tuple = $curseur -> fetch() )
{       
    $id=$tuple["camp_id"];
    $curseur2 = $BDD -> query( "SELECT sur_title FROM survey WHERE sur_camp_id = $id Order By sur_title" );
    echo "<div class='well onmouse'>";
    echo "<h2>".$tuple["camp_title"]."</h2>";
    echo "<p>".$tuple["camp_description"]."</p>";
    while ( $tuple2 = $curseur2 -> fetch() )
    {
        echo "<a class='survey' href=''>".$tuple2["sur_title"]."</a><br />";
    }
    echo "<b>".$tuple["camp_experimenter"]."</b>";
    echo "<div class='button'>";
    echo "Modifier : <a class='modify' href='modify_campaign.php?id=$id' title='Cliquez ici pour modifier cette campagne'><span class='glyphicon glyphicon-wrench'></span></a>";
    echo " | Supprimer : <a class='delete' href='delete_campaign.php?id=$id' title='Cliquez ici pour supprimer cette campagne'><span class='glyphicon glyphicon-trash'></span></a></div></div>";
}

include("footer.php");
?>