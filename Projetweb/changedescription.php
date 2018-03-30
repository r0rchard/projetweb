<?php 
include("header.php");
require("connect.php");
$sur_id = $_GET['camp'];
$description = $_POST['description'];
$BDD -> exec ("UPDATE campaign
SET camp_description = '$description'  
WHERE `camp_title` LIKE '$sur_id'");
?>
<div class='well onmouse'>
    <a href = 'options_campaign.php' class="btn btn-default btn-primary"> retour aux campagnes </a>

<?php
include("footer.php");
?>