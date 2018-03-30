<?php 
include("header.php"); 

$sur_id = $_GET['sur_id'];
$usr_id = $_GET['usr_id'];
?> 

<div class="well">  
    <?php echo '<form class="form-horizontal" role="form" enctype="multipart/form-data" action="attrakdiffr2.php?sur_id=' . $sur_id . '&usr_id=' . $usr_id . '" method="post">'; ?>
        <?php affichageAttrakdiff(2); ?>
        <div class="form-group">
            <div class="col-sm-4 col-sm-offset-4">
                <button type="submit" class="btn btn-default btn-primary">Valider</button>
            </div>
        </div>    
    </form>
</div>

<?php include("footer.php"); ?>