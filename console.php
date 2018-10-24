<?php
require "vendor/autoload.php";
require('controller/backend.php');

use \CarolineMoulin\Portfolio;

try {
    if (isset($_GET['action'])) {
        require('view/backend/consolePanelView.php');
    }
    //vers la page d'ajout d'un nouveau projet
    elseif($_GET['action'] == 'addProject') {
        require('view/backend/newProjectView.php');
    }
    //Ecrire un nouveau projet depuis la zone admin
    elseif($_GET['action'] == 'newProject'){
        if (!empty($_POST['titleProject'])&& !empty($_POST['description'])&& !empty($_POST['techno'])&& !empty($_POST['image'])&& !empty($_POST['link'])){
            newProject($_POST['titleProject'], $_POST['description'], $_POST['techno'], $_POST['image'], $_POST['link']);
        }else {
            throw new Exception('Tous les champs ne sont pas remplis');
        }
    }else {
        require('view/backend/consolePanelView.php');
    }
}
catch(Exception $e) {
    ob_start();
    ?>

    <div id="errorPage">
        <p><?php echo 'Erreur !'; ?></p>
        <p>Retour à <a href="index.php">l'accueil</a></p>
    </div>

    <?php
    $content = ob_get_clean();
    require('view/backend/template.php');
}