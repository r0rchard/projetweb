<?php 
include("header.php");

?> 
<div class="well">  
    <form class="form-horizontal" role="form" enctype="multipart/form-data" action="page2validee.php" method="post">
        <?php        
            affichage(1);
        ?>
        <div class="form-group">
            <div class="col-sm-4 col-sm-offset-4">
                <button type="submit" class="btn btn-default btn-primary">Valider</button>
            </div>
        </div>    
    </form>
</div>
<?php
include("footer.php");
?>