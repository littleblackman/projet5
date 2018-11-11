<?php
//namespace App;
require "vendor/autoload.php";

use App\Controller\Backend;
use App\Controller\Frontend;
$myFront = new Frontend();
$myBack = new backend();

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listProjects') {
            $myFront::listProjects($projectId);
        }
//Gestion des projets
        //vers la page d'ajout de projet
        elseif($_GET['action'] == 'addProject'){
            require('App/view/backend/newProjectView.php');
        }
        //Ajout d'une compétence depuis la zone admin
        elseif($_GET['action'] == 'newProject'){
            if (!empty($_POST['titleProject'])&& !empty($_POST['description'])&& !empty($_POST['techno'])&& !empty($_POST['image'])&& !empty($_POST['link'])) {
                $myBack::newProject($_POST['titleProject'], $_POST['description'], $_POST['techno'], $_POST['image'], $_POST['link']);
            }else {
                throw new \Exception('Tous les champs ne sont pas remplis');
            }
        }
        //vers la page de gestion des projets
        elseif($_GET['action'] == 'manageProjects'){
            $myBack::listProjectsBack();
        }
        //Vers la page d'edition de formations
        elseif ($_GET['action'] == 'editProjectView') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $myBack::viewEditProject($_GET['id']);
            }else {
                throw new \Exception('Aucun projet à éditer !');
            }
        }
        //validation de l'edition des formations
        elseif($_GET['action'] == 'editProject'){
            if (isset($_GET['id']) && ($_GET['id'] > 0)){
                $myBack::editProject($_GET['id'], $_POST['titleProject'], $_POST['description'], $_POST['techno'], $_POST['image'], $_POST['link']);
            }else{
                throw new \Exception('Aucun id de projet');
            }
        }
        //Suppression d'une formation
        elseif($_GET['action'] == 'deleteProject'){
            if(isset($_GET['id']) && $_GET['id'] > 0){
                $myBack::deleteProject($_GET['id']);
            }else{
                throw new \Exception('Aucun id de projet');
            }
        }
//Gestion des expériences
        //vers la page d'ajout de compétence
        elseif($_GET['action'] == 'addJob'){
            require('App\view/backend/newJobView.php');
        }
        //Ajout d'une compétence depuis la zone admin
        elseif($_GET['action'] == 'newJob'){
            if (!empty($_POST['entreprise'])&& !empty($_POST['logo'])&& !empty($_POST['missions'])&& !empty($_POST['dateStart'])&& !empty($_POST['dateEnd'])) {
                $myBack::newJob($_POST['entreprise'], $_POST['logo'], $_POST['missions'], $_POST['dateStart'], $_POST['dateEnd']);
            }else {
                throw new \Exception('Tous les champs ne sont pas remplis');
            }
        }
        //vers la page de gestion des compétences
        elseif($_GET['action'] == 'manageJobs'){
            $myBack::listJobsBack();
        }
        //Vers la page d'edition d'expérience
        elseif ($_GET['action'] == 'editJobView') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $myBack::viewEditJob($_GET['id']);
            }else {
                throw new \Exception('Aucune expérience à éditer !');
            }
        }
        //validation de l'edition des Expérences
        elseif($_GET['action'] == 'editJob'){
            if (isset($_GET['id']) && ($_GET['id'] > 0)){
                $myBack::editJob($_GET['id'], $_POST['entreprise'], $_POST['logo'], $_POST['missions'], $_POST['dateStart'], $_POST['dateEnd']);
            }else{
                throw new \Exception('Aucun id d\'expérience');
            }
        }
        //Suppression d'une compétences
        elseif($_GET['action'] == 'deleteJob'){
            if(isset($_GET['id']) && $_GET['id'] > 0){
                $myBack::deleteJob($_GET['id']);
            }else{
                throw new \Exception('Aucun id d\'expérience');
            }
        }

//Gestion des formations
        //vers la page d'ajout de formation
        elseif($_GET['action'] == 'addTraining'){
            require('App/view/backend/newTrainingView.php');
        }
        //Ajout d'une compétence depuis la zone admin
        elseif($_GET['action'] == 'newTraining'){
            if (!empty($_POST['graduate'])&& !empty($_POST['date'])&& !empty($_POST['institution'])) {
                $myBack::newTraining($_POST['graduate'], $_POST['date'], $_POST['institution']);
            }else {
                throw new \Exception('Tous les champs ne sont pas remplis');
            }
        }
        //vers la page de gestion des formations
        elseif($_GET['action'] == 'manageTrainings'){
            $myBack::listTrainingsBack();
        }
        //Vers la page d'edition de formations
        elseif ($_GET['action'] == 'editTrainingView') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $myBack::viewEditTraining($_GET['id']);
            }else {
                throw new \Exception('Aucune formation à éditer !');
            }
        }
        //validation de l'edition des formations
        elseif($_GET['action'] == 'editTraining'){
            if (isset($_GET['id']) && ($_GET['id'] > 0)){
                $myBack::editTraining($_GET['id'], $_POST['graduate'], $_POST['date'], $_POST['institution']);
            }else{
                throw new \Exception('Aucun id de formation');
            }
        }
        //Suppression d'une formation
        elseif($_GET['action'] == 'deleteTraining'){
            if(isset($_GET['id']) && $_GET['id'] > 0){
                $myBack::deleteTraining($_GET['id']);
            }else{
                throw new \Exception('Aucun id de formation');
            }
        }

//Gestion des compétences
        //vers la page d'ajout de compétence
        elseif($_GET['action'] == 'addSkill'){
            require('App\view/backend/newSkillView.php');
        }
        //Ajout d'une compétence depuis la zone admin
        elseif($_GET['action'] == 'newSkill'){
            if (!empty($_POST['skill'])&& !empty($_POST['level'])) {
                $myBack::newSkill($_POST['skill'], $_POST['level']);
            }else {
                throw new \Exception('Tous les champs ne sont pas remplis');
            }
        }
        //vers la page de gestion des compétences
        elseif($_GET['action'] == 'manageSkills'){
            $myBack::listSkillsBack();
        }
        //Vers la page d'edition de compétences
        elseif ($_GET['action'] == 'editSkillView') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $myBack::viewEditSkill($_GET['id']);
            }else {
                throw new \Exception('Aucune Compétence à éditer !');
            }
        }
        //validation de l'edition des compétences
        elseif($_GET['action'] == 'editSkill'){
            if (isset($_GET['id']) && ($_GET['id'] > 0)){
                $myBack::editSkill($_GET['id'], $_POST['skill'], $_POST['level']);
            }else{
                throw new \Exception('Aucun id de compétence');
            }
        }
        //Suppression d'une compétences
        elseif($_GET['action'] == 'deleteSkill'){
            if(isset($_GET['id']) && $_GET['id'] > 0){
                $myBack::deleteSkill($_GET['id']);
            }else{
                throw new \Exception('Aucun id de projet');
            }
        }
    }
    else {
        require('App/view/backend/consolePanelView.php');
    }

}
catch(\Exception $e) {
    ob_start();
    ?>

    <div id="errorPage">
        <p>Retour à <a href="index.php">l'accueil</a></p>
    </div>

    <?php
    $content = ob_get_clean();
    require('App/view/backend/template.php');
}


