<?php 
include("header.php");
require("connect.php");

$curseur = $BDD -> query( "SELECT * FROM campaign Order By camp_id" );


while ( $tuple = $curseur -> fetch() )
{       
    $id=$tuple["camp_id"];
    $curseur2 = $BDD -> query( "SELECT sur_title FROM survey WHERE sur_camp_id = $id Order By sur_title" );
    echo "<div class='well onmouse'>";
    echo "<h2>".$tuple["camp_title"]."</h2>";
    echo "<p>Description : ".$tuple["camp_description"]."</p>";
    echo "Questionnaire•s :<ul>";
    while ( $tuple2 = $curseur2 -> fetch() )
    {
        echo "<li>".$tuple2["sur_title"]."</li>";
    }
    echo "</ul>";
    echo "<b>Expérimentateur•rice•s : ".$tuple["camp_experimenter"]."</b>";
    echo "<div class='button'>Supprimer :
            <a class='delete' href='delete_campaign.php?id=$id' title='Cliquez ici pour supprimer cette campagne'>
                <span class='glyphicon glyphicon-trash'></span>
            </a>
            <span class='space'></span>
            <ul class='nav navbar-nav navbar-right'>
                <div class='dropdown'>Modifier :
                    <a href='#' class='dropdown-toggle modify' data-toggle='dropdown'>
                        <span class='glyphicon glyphicon-wrench'></span>
                    </a>
                    <ul class='dropdown-menu'>
                        <li><a href='changingcampaign.php?camp=".$tuple["camp_title"]."'>Modifiez le titre de cette campagne</a></li>
                        <li><a href='changingdescription.php?camp=".$tuple["camp_title"]."'>Modifiez la description de cette campagne</a></li>
                        <li><a href='changinguser.php?camp=".$tuple["camp_title"]."'>Modifiez le nom du ou des expérimentateurs de cette campagne</a></li>
                        <li><a href='addingquest.php?id=$id&camp=".$tuple["camp_title"]."'>Ajouter un questionnaire</a></li>
                    </ul>
                </div>
            </ul>
        </div>
    </div>";    
}

include("footer.php");
?>