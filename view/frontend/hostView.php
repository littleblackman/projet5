<?php $title = 'Portfolio de Caroline MOULIN'; ?>

<?php ob_start(); ?>

    <!--diaporama-->
<?php include("../../include/diaporama.php"); ?>
    <!--Expérience/CV-->
    <div class="card my-4">
    <div class="card-body">
        <h5 class="card-header">Mon parcours</h5>
        <div class="input-group">

        </div>
    </div>
    <!--Map-->
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>