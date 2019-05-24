<?php include("header.php"); ?>   

<h2 class="text-center">Ajout d'une campagne</h2>
<div class="well">
    <form class="form-horizontal" role="form" enctype="multipart/form-data" action="campaign_added.php" method="post">
        <input type="hidden" name="id" value="">
        <div class="form-group">
            <label class="col-sm-4 control-label">Titre</label>
                <div class="col-sm-6">
                  <input type="text" name="title" value="" class="form-control" placeholder="Entrez le titre" required>
                </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Description</label>
            <div class="col-sm-6">
            <textarea name="description" class="form-control" rows="6" placeholder="Entrez sa description" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Expérimentateur</label>
            <div class="col-sm-6">
                <input type="text" name="experimenter" value="" class="form-control" placeholder="Entrez le nom de l'expérimentateur" required>
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