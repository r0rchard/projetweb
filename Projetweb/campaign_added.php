<?php 
include("header.php"); 

$title=str_replace("'", "\'", $_POST['title']);
$desc=str_replace("'", "\'", $_POST['description']);
$exp=str_replace("'", "\'", $_POST['experimenter']);

require("connect.php");
$BDD -> exec( "INSERT INTO campaign(camp_title, camp_description, camp_experimenter) VALUES('$title', '$desc', '$exp')" );

$curseur = $BDD -> query( "SELECT camp_id FROM campaign WHERE camp_title='$title' AND camp_description='$desc' AND camp_experimenter='$exp'" );
while ( $tuple = $curseur -> fetch() )
{    
    $id=$tuple["camp_id"];
    header('Location: add_survey.php?id='.$id);
}

include("footer.php");
?>

