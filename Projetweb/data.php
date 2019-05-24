<?php 
include("header.php");
require("connect.php");

$curseur = $BDD -> query( "SELECT * FROM campaign Order By camp_id" );
while ( $tuple = $curseur -> fetch() )
{    
    $camp_id=$tuple["camp_id"];      
    echo "<div class='well onmouse'>";
    echo "<h2>".$tuple["camp_title"]."</h2>";
    echo "<p>Description : ".$tuple["camp_description"]."</p>";
    echo "Liste des ustilisateur•rice•s ayant répondu par questionnaire :<br />";
    $curseur2 = $BDD -> query( "SELECT * FROM survey WHERE sur_camp_id = $camp_id" );  
    while ( $tuple2 = $curseur2 -> fetch() )
    {   
        $sur_id=$tuple2["sur_id"];
        echo "<div class='well'>";
        echo "<h3>".$tuple2["sur_title"]."</h3>";
        $curseur3 = $BDD -> query( "SELECT * FROM user WHERE usr_id IN (SELECT answ_usr_id FROM answer WHERE answ_sur_id= " . $sur_id . ")" );
        while  ( $tuple3 = $curseur3 -> fetch() )
        {
            $usr_id = $tuple3['usr_id'];
            echo "<a href='data_user.php?id=$usr_id' class='btn btn-default btn-primary'>".$tuple3["usr_login"]."</a><br /><br />";
        }
        echo "</div>";  
    }
    echo "<b>Expérimentateur•rice•s : ".$tuple["camp_experimenter"]."</br>";
    echo "<a href = 'download2.php?camp=$camp_id' class='btn btn-default btn-primary'> Télécharger les données de la campagne </a></b></div>";
}

include("footer.php");
?>