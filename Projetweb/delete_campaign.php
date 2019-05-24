<?php include("header.php"); ?>

<div class="well">
    <h3 class="text-center">Votre campagne a bien été supprimée.</h3>
</div>

<?php

require("connect.php");
$id=$_GET['id'];
$BDD -> exec( "DELETE FROM campaign WHERE camp_id = $id" );

include("footer.php");
?>