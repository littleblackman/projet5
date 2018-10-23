<?php $title = 'Portfolio de Caroline MOULIN'; ?>

<?php ob_start(); ?>

    <!--diaporama-->
<?php include("include/diaporama.php"); ?>
    <!--Expérience/CV-->
<?php include("include/cv.php"); ?>
    <!--Map-->
<?php include("include/map.php"); ?>
    <!--Contact-->
<?php include("include/contact.php"); ?>

<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>