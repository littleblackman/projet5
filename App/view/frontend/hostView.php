<?php $title = 'Portfolio de Caroline MOULIN'; ?>

<?php ob_start(); ?>

    <!--diaporama-->
<?php include("App/Include/diaporama.php"); ?>
    <!--Expérience/CV-->
<?php include("App/Include/cv.php"); ?>
    <!--Map-->
<?php include("App/Include/map.php"); ?>
    <!--Contact-->
<?php include("App/Include/contact.php"); ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>