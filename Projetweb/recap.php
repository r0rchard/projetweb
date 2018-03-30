<?php 
include("header.php");
require("connect.php");

$usr_name = $_SESSION['usr_login'];
$curseur = $BDD -> query( "SELECT usr_id FROM user WHERE usr_login = '$usr_name'" );
if ( $tuple = $curseur -> fetch() )
{    
    $usr_id=$tuple["usr_id"];
}

//Récupérer les campagnes où il a répondu
$curseur1 = $BDD -> query( "SELECT * FROM campaign WHERE camp_id IN  
(SELECT sur_id FROM survey WHERE sur_id IN 
(SELECT answ_sur_id FROM answer WHERE answ_usr_id = ".$usr_id.")) ORDER BY camp_id");

//afficher les campagnes
while($tuple1 = $curseur1 -> fetch())
{
    echo "<div class='well onmouse'><h2>".$tuple1["camp_title"]."</h2>";

    //Récupérer les questionnaires
    $curseur2 = $BDD -> query( "SELECT * FROM survey WHERE sur_camp_id = ".$tuple1['camp_id']." AND sur_id IN  
    (SELECT answ_sur_id FROM answer WHERE answ_usr_id = ".$usr_id.") ");

    //afficher questionnaires
    while($tuple2 = $curseur2 -> fetch())
    {
        echo "<div class='well onmouse'><strong>".$tuple2["sur_title"]."</strong>";
        $curseur3 = $BDD -> query( "SELECT DISTINCT * FROM attrakdiffq" );

        //afficher chaque question
        while ( $tuple3 = $curseur3 -> fetch() )
        {
            //récupérer valeur réponse
            $curseur4 = $BDD -> query( "SELECT answ_value FROM answer WHERE answ_usr_id = ".$usr_id." AND answ_sur_id = ".$tuple2['sur_id']." AND answ_quest_id = ".$tuple3['quest_id']."");
            if ($tuple4 = $curseur4 -> fetch() )
            {
                $value = $tuple4['answ_value'];
            }

            print "<div class=\"row\"><div class=\"col-lg-3\">".$tuple3['quest_word1']."</div>";

            //ID QUESTION
            $id = $tuple3["quest_id"];            
                if ($id%2==0)
                {
                    for ($k= 1; $k <=7; $k++)
                    {
                        if ($k == $value) $attribut = "checked"; else $attribut = "";
                        print "<div class= \"col-lg-1\"><input type=\"radio\" name=\"".$id."\" value= \"".$k."\" $attribut disabled>".$k."</div>";
                    }
                }
                else
                {
                    for ($k= 7; $k >= 1; $k--)
                    {                        
                        if ($k == $value) $attribut = "checked"; else $attribut = "";
                        print "<div class= \"col-lg-1\"><input type=\"radio\" name=\"".$id."\" value= \"".$k."\" $attribut disabled>".$k."</div>";
                    }
                }            
                print "<div class=\"col-lg-2\">".$tuple3['quest_word2']."</div>";
                print "</div>";      
        }
        echo "</div>";
    }
    echo "</div>";
}

include("footer.php");
?>