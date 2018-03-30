<?php 
include("header.php");
require("connect.php");
$sur_id = $_GET['camp'];
print " <form action='changedescription.php?camp=".$sur_id."' method=\"post\">";
echo "<div class='well onmouse'>
    <p>
    Quelle est la nouvelle description ? </br>
    <input type=\"textarea\"name=\"description\">
</p>";
?>
<input type="submit" class="btn btn-default btn-primary"value="Valider" />
</p>
</div>
</form>
<?php
include("footer.php");
?>