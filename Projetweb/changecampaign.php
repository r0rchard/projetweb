<?php 
include("header.php");
require("connect.php");
$sur_id = $_GET['camp'];
$titre = $_POST['titre'];
$BDD -> exec ("UPDATE campaign
SET camp_title = '$titre'  
WHERE `camp_title` LIKE '$sur_id'");
?>
<div class='well onmouse'>
    <a href = 'options_campaign.php' class="btn btn-default btn-primary"> retour aux campagnes </a>
</div>

<?php
include("footer.php");
?>