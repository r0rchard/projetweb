<?php 
include("header.php");
require("connect.php");
$sur_id = $_GET['camp'];
print " <form action='changecampaign.php?camp=".$sur_id."' method=\"post\">";
echo "<div class='well onmouse'>
<p>
    Quel est le nouveaux nom de la campagne ?</br>
    <input type=\"text\"name=\"titre\">
</p>";
?>
<input type="submit"class="btn btn-default btn-primary"value="Valider" />
</p>
</div>
</form>
<?php
include("footer.php");
?>