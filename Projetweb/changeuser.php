<?php 
include("header.php");
require("connect.php");
$sur_id = $_GET['camp'];
$user = $_POST['user'];
$BDD -> exec ("UPDATE campaign
SET camp_experimenter = '$user'  
WHERE `camp_title` LIKE '$sur_id'");
?>
<div class='well onmouse'>
<a href = 'options_campaign.php'class="btn btn-default btn-primary"> retour aux campagnes </a>
<?php
include("footer.php");
?>