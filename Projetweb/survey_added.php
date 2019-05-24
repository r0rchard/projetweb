<?php include("header.php"); ?>

<div class="well">
    <h3 class="text-center">Votre questionnaire a bien été créée.</h3>
</div>

<?php
$camp_id=$_GET['id'];
$survey=$_POST['type'];
$questions=$_POST['questions'];
$invitation=$_POST['invitation'];
$title=str_replace("'", "\'", $_POST['title']);

require("connect.php");
$BDD -> exec( "INSERT INTO survey(sur_camp_id, sur_type, sur_questions, sur_invitation, sur_title) VALUES('$camp_id', '$survey', '$questions', '$invitation', '$title')" );

include("footer.php");
?>