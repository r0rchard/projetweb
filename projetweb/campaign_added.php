<?php include("header.php"); ?>

<div class="well">
    <h3 class="text-center">Votre campagne a bien été créée.</h3>
</div>

<?php
$title=str_replace("'", "\'", $_POST['title']);
$desc=str_replace("'", "\'", $_POST['description']);
$exp=str_replace("'", "\'", $_POST['experimenter']);

require("connect.php");
$BDD -> exec( "INSERT INTO campaign(camp_title, camp_description, camp_experimenter) VALUES('$title', '$desc', '$exp')" );
$BDD -> exec( "CREATE DATABASE  $title (
                                        usr_id int(11) primary key ,
                                        reponses int(11) NULL,
                                        FOREIGN KEY (usr_id) REFERENCES user(usr_id),
                                        FOREIGN KEY (question_id) REFERENCES user(usr_id)
                                        ");

include("footer.php");
?>