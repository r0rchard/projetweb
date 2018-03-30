<?php 
include("header.php");
require("connect.php");
$sur_id = $_GET['camp'];
$usr_id = $_GET['user'];
echo "<div class='well onmouse'>";
print " <p>quelle est le numéro de la question que vous voulez modifier ? :</p>";
print " <form action='change.php?user=".$usr_id."&camp=".$sur_id."' method=\"post\">";
    print "<p><select name=\"question\">";
    for($k=1;$k<=28;$k++)
    {
    print"<option value=\"".$k."\">".$k."</option>";
    }
    print "</select></br>";
    print "quelle valeur voulez vous lui donner ? </br>";
    print " <select name=\"reponse\">";
    for($k=1;$k<=7;$k++)
    {
    print"<option value=\"".$k."\">".$k."</option>";
    }
    print "</select></br>";
?>
<input type="submit" class="btn btn-default btn-primary"value="Valider" />
</p>
</div>
</form>