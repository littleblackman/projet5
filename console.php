<?php
require "vendor/autoload.php";
require('controller/backend.php');


try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listProjects') {
            listProjects();
        }

       //vers la page d'ecriture d'un article
        elseif($_GET['action'] == 'addProject'){
            require('view/backend/newProjectView.php');
        }

        //Ecrire un nouvel article depuis la zone admin
        elseif($_GET['action'] == 'newProject'){
            if (!empty($_POST['content'])&& !empty($_POST['description'])&& !empty($_POST['techno'])&& !empty($_POST['image'])&& !empty($_POST['link'])) {
                newProject($_POST['titleProject'], $_POST['description'], $_POST['techno'], $_POST['image'], $_POST['link']);
            }else {
                throw new Exception('Tous les champs ne sont pas remplis');
            }
        }

        //vers la page de gestion des chapitres
        elseif($_GET['action'] == 'manageProject'){
            listProjectsBack();
        }

        //Vers la page d'edition de chapitre
        elseif ($_GET['action'] == 'editProjectView') {

            if (isset($_GET['id']) && $_GET['id'] > 0) {
                viewEditProject($_GET['id']);
            }else {
                throw new Exception('Aucun chapitre à éditer !');
            }
        }
        //validation de l'edition du chapitre
        elseif($_GET['action'] == 'editProject'){
            if (isset($_GET['id']) && ($_GET['id'] > 0)){
                editProject($_GET['id'], $_POST['titleProject'], $_POST['description'], $_POST['techno'], $_POST['image'], $_POST['link']);
            }else{
                throw new Exception('Aucun id d\'article');
            }
        }
        //Suppression d'un chapitre
        elseif($_GET['action'] == 'deleteProject'){
            if(isset($_GET['id']) && $_GET['id'] > 0){
                deleteProject($_GET['id']);
            }else{
                throw new Exception('Aucun id de chapitre');
            }
        }

    }
    else {
        require('view/backend/consolePanelView.php');
    }

}
catch(Exception $e) {
    ob_start();
    ?>

    <div id="errorPage">
        <p>Retour à <a href="index.php">l'accueil</a></p>
    </div>

    <?php
    $content = ob_get_clean();
    require('view/backend/template.php');
}


