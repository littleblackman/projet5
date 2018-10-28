<?php
require "vendor/autoload.php";
require('controller/backend.php');


try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listProjects') {
            listProjects();
        }
//Gestion des projets
        //vers la page d'ajout de projet
        elseif($_GET['action'] == 'addProject'){
            require('view/backend/newProjectView.php');
        }
        //Ajout d'une compétence depuis la zone admin
        elseif($_GET['action'] == 'newProject'){
            if (!empty($_POST['titleProject'])&& !empty($_POST['description'])&& !empty($_POST['techno'])&& !empty($_POST['image'])&& !empty($_POST['link'])) {
                newProject($_POST['titleProject'], $_POST['description'], $_POST['techno'], $_POST['image'], $_POST['link']);
            }else {
                throw new Exception('Tous les champs ne sont pas remplis');
            }
        }
        //vers la page de gestion des projets
        elseif($_GET['action'] == 'manageProjects'){
            listProjectsBack();
        }
        //Vers la page d'edition de formations
        elseif ($_GET['action'] == 'editProjectView') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                viewEditProject($_GET['id']);
            }else {
                throw new Exception('Aucun projet à éditer !');
            }
        }
        //validation de l'edition des formations
        elseif($_GET['action'] == 'editProject'){
            if (isset($_GET['id']) && ($_GET['id'] > 0)){
                editProject($_GET['id'], $_POST['titleProject'], $_POST['description'], $_POST['techno'], $_POST['image'], $_POST['link']);
            }else{
                throw new Exception('Aucun id de projet');
            }
        }
        //Suppression d'une formation
        elseif($_GET['action'] == 'deleteProject'){
            if(isset($_GET['id']) && $_GET['id'] > 0){
                deleteProject($_GET['id']);
            }else{
                throw new Exception('Aucun id de projet');
            }
        }
//Gestion des expériences

//Gestion des formations
        //vers la page d'ajout de formation
        elseif($_GET['action'] == 'addTraining'){
            require('view/backend/newTrainingView.php');
        }
        //Ajout d'une compétence depuis la zone admin
        elseif($_GET['action'] == 'newTraining'){
            if (!empty($_POST['graduate'])&& !empty($_POST['date'])&& !empty($_POST['institution'])) {
                newTraining($_POST['graduate'], $_POST['date'], $_POST['institution']);
            }else {
                throw new Exception('Tous les champs ne sont pas remplis');
            }
        }
        //vers la page de gestion des formations
        elseif($_GET['action'] == 'manageTrainings'){
            listTrainingsBack();
        }
        //Vers la page d'edition de formations
        elseif ($_GET['action'] == 'editTrainingView') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                viewEditTraining($_GET['id']);
            }else {
                throw new Exception('Aucune formation à éditer !');
            }
        }
        //validation de l'edition des formations
        elseif($_GET['action'] == 'editTraining'){
            if (isset($_GET['id']) && ($_GET['id'] > 0)){
                editTraining($_GET['id'], $_POST['graduate'], $_POST['date'], $_POST['institution']);
            }else{
                throw new Exception('Aucun id de formation');
            }
        }
        //Suppression d'une formation
        elseif($_GET['action'] == 'deleteTraining'){
            if(isset($_GET['id']) && $_GET['id'] > 0){
                deleteTraining($_GET['id']);
            }else{
                throw new Exception('Aucun id de formation');
            }
        }

//Gestion des compétences
        //vers la page d'ajout de compétence
        elseif($_GET['action'] == 'addSkill'){
            require('view/backend/newSkillView.php');
        }
        //Ajout d'une compétence depuis la zone admin
        elseif($_GET['action'] == 'newSkill'){
            if (!empty($_POST['skill'])&& !empty($_POST['level'])) {
                newSkill($_POST['skill'], $_POST['level']);
            }else {
                throw new Exception('Tous les champs ne sont pas remplis');
            }
        }
        //vers la page de gestion des compétences
        elseif($_GET['action'] == 'manageSkills'){
            listSkillsBack();
        }
        //Vers la page d'edition de compétences
        elseif ($_GET['action'] == 'editSkillView') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                viewEditSkill($_GET['id']);
            }else {
                throw new Exception('Aucune Compétence à éditer !');
            }
        }
        //validation de l'edition des compétences
        elseif($_GET['action'] == 'editSkill'){
            if (isset($_GET['id']) && ($_GET['id'] > 0)){
                editSkill($_GET['id'], $_POST['skill'], $_POST['level']);
            }else{
                throw new Exception('Aucun id de compétence');
            }
        }
        //Suppression d'une compétences
        elseif($_GET['action'] == 'deleteSkill'){
            if(isset($_GET['id']) && $_GET['id'] > 0){
                deleteSkill($_GET['id']);
            }else{
                throw new Exception('Aucun id de projet');
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


