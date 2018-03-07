<?php
    session_start();
    session_destroy();
    include("header.php");
?>

<div class="well">
    <h3 class="text-center">Vous vous êtes déconnecté.</h3>
</div>

<?php include("footer.php"); ?>