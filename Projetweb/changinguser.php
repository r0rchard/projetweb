<?php 
include("header.php");
require("connect.php");
$sur_id = $_GET['camp'];
print " <form action='changeuser.php?camp=".$sur_id."' method=\"post\">";
echo "<div class='well onmouse'>
<p>
Veuillez indiquer les nouveaux expérimentateur•rice•s : </br>
    <input type=\"textarea\"name=\"user\">
</p>";
?>
<input type="submit"class="btn btn-default btn-primary" value="Valider" />
</p>
</form>
</div>
<?php
include("footer.php")
?>