<?php $title = 'Portfolio de Caroline MOULIN'; ?>

<?php ob_start(); ?>

    <!--diaporama-->
<?php include("App/include/diaporama.php"); ?>
    <!--Expérience/CV-->
<?php include("App/include/cv.php"); ?>
    <!--Map-->
<?php include("App/include/map.php"); ?>
    <!--Contact-->
<?php include("App/include/contact.php"); ?>

<?php $content = ob_get_clean(); ?>

<?php require('App/view/frontend/template.php'); ?>