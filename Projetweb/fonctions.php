<?php
function questionAttrakdiff($mot1, $mot2, $id)
{   
    print "<div class=\"row\"><div class=\"col-lg-3\">".$mot1."</div>";

    if ($id%2==0)
    {
        for ($k= 1; $k <=7; $k++)
        {
            print "<div class= \"col-lg-1\"><input type=\"radio\" name=\"".$id."\" value= \"".$k."\" required>".$k."</div>";
        }
    }
    else
    {
        for ($k= 7; $k >= 1; $k--)
        {
            print "<div class= \"col-lg-1\"><input type=\"radio\" name=\"".$id."\" value= \"".$k."\" required>".$k."</div>";
        }
    }

    print "<div class=\"col-lg-2\">".$mot2."</div>";
    print "</div>";
}

function affichageAttrakdiff($page)
{    
    require("connect.php");

    if($page == 1)
    {
        $curseur = $BDD -> query( "SELECT DISTINCT * FROM attrakdiffq WHERE quest_id >= 1 AND quest_id < 11" );
    }
    else if($page == 2)
    {
        $curseur = $BDD -> query( "SELECT DISTINCT * FROM attrakdiffq WHERE quest_id >= 11 AND quest_id < 20" );
    }
    else if($page == 3)
    {
        $curseur = $BDD -> query( "SELECT DISTINCT * FROM attrakdiffq WHERE quest_id >= 20 AND quest_id < 29" );
    }
    
    while ( $tuple = $curseur -> fetch() )
    {
        questionAttrakdiff($tuple["quest_word1"], $tuple["quest_word2"], $tuple["quest_id"]);        
    }
}

?>
