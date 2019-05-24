<?php 
include("header.php");
require("connect.php");
$sur_id = $_GET['camp'];
$id=$_GET['id'];
print "<h2 class=\"text-center\">Ajout d'un questionnaire</h2>
<div class=\"well\">";
    echo "<form class='form-horizontal' role='form' enctype='multipart/form-data' action='survey_added.php?id=$id' method='post'";?>
        <input type="hidden" name="id" value="">
        <div class="form-group">
            <label class="col-sm-4 control-label">Type du questionnaire</label>
            <div class="col-sm-6">
                <select name="type">
                    <option value="AttrakDiff">AttrakDiff</option>
                    <option value="SUS">SUS</option>
                    <option value="NASA-TLX">NASA-TLX</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Type de questions</label>
            <div class="col-sm-6">
                <select name="questions">
                    <option value="Evaluation individuelle">Evaluation individuelle</option>
                    <option value="Comparaison entre A et B">Comparaison entre A et B</option>
                    <option value="Comparaison avant-après">Comparaison avant-après</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Type de participation</label>
            <div class="col-sm-6">
                <label><input type="radio" name="invitation" value="Anonyme" /><span class="none"> Anonyme</span></label><br />
                <label><input type="radio" name="invitation" value="Sur invitation" /><span class="none"> Sur invitation</span></label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Titre du questionnaire</label>
                <div class="col-sm-6">
                  <input type="text" name="title" value="" class="form-control" placeholder="Entrez le titre" required>
                </div>
        </div> 
        <div class="form-group">
            <div class="col-sm-4 col-sm-offset-4">
                <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-save"></span> Enregistrer</button>
            </div>
        </div>
    </form>
</div>

<?php include("footer.php"); ?>
</form>