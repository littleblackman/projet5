<?php

require "vendor/autoload.php";
require_once('model/ProjectManager.php');
require_once('model/TrainingManager.php');
require_once('model/SkillManager.php');

//Projets
function newProject($titleProject, $description, $techno, $image, $link)
{
    $projectManager = new ProjectManager();
    $affectedLines = $projectManager->addProject($titleProject, $description, $techno, $image, $link);
    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter un projet');
    }
    else {
        header('Location: console.php?action=manageProjects');
    }
}

function viewEditProject ($projectId)
{
    $projectManager = new ProjectManager();
    $project = $projectManager->getProject($projectId);
    require ('view/backend/editProjectView.php');
}

function editProject ($id, $titleProject, $description, $techno, $image, $link)
{
    $projectManager = new ProjectManager();
    $affectedLines = $projectManager->projectEdit($id, $titleProject, $description, $techno, $image, $link);
    if ($affectedLines === false) {
        throw new Exception('Impossible de modifier le projet');
    }
    else{
        header('location: consolePanelView.php?action=project&id='.$id);
    }
}

function listProjectsBack ()
{
    $projectManager = new ProjectManager();
    $projects = $projectManager->getProjects();
    require ('view/backend/manageProjectsView.php');
}

function deleteProject($projectId)
{
    $projectManager = new ProjectManager();
    $affectedLines = $projectManager->projectDelete($projectId);
    if ($affectedLines === false) {
        throw new Exception('Impossible de supprimer le projet');
    }
    else {
        header('Location: console.php?action=manageProject');
    }
}
//Expériences

//formations
function newTraining($graduate, $date, $institution)
{
    $trainingManager = new TrainingManager();
    $affectedLines = $trainingManager->addTraining($graduate, $date, $institution);
    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter une formation');
    }
    else {
        header('Location: console.php?action=manageTrainings');
    }
}

function viewEditTraining ($trainingId)
{
    $trainingManager = new TrainingManager();
    $training = $trainingManager->getTraining($trainingId);
    require ('view/backend/editTrainingView.php');
}

function editTraining ($id, $graduate, $date, $institution)
{
    $trainingManager = new TrainingManager();
    $affectedLines = $trainingManager->trainingEdit($id, $graduate, $date, $institution);
    if ($affectedLines === false) {
        throw new Exception('Impossible de modifier la formation');
    }
    else{
        header('location: consolePanelView.php?action=training&id='.$id);
    }
}

function listTrainingsBack ()
{
    $trainingManager = new TrainingManager();
    $trainings = $trainingManager->getTrainings();
    require ('view/backend/manageTrainingsView.php');
}

function deleteTraining($trainingId)
{
    $trainingManager = new TrainingManager();
    $affectedLines = $trainingManager->trainingDelete($trainingId);
    if ($affectedLines === false) {
        throw new Exception('Impossible de supprimer la formation');
    }
    else {
        header('Location: console.php?action=manageTrainings');
    }
}
//Compétences
function newSkill($skill, $level)
{
    $skillManager = new SkillManager();
    $affectedLines = $skillManager->addSkill($skill, $level);
    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter une compétence');
    }
    else {
        header('Location: console.php?action=manageSkills');
    }
}

function viewEditSkill ($skillId)
{
    $skillManager = new SkillManager();
    $project = $skillManager->getSkill($skillId);
    require ('view/backend/editSkillView.php');
}

function editSkill ($id, $skill, $level)
{
    $SkillManager = new SkillManager();
    $affectedLines = $SkillManager->skillEdit($id, $skill, $level);
    if ($affectedLines === false) {
        throw new Exception('Impossible de modifier la compétence');
    }
    else{
        header('location: consolePanelView.php?action=skill&id='.$id);
    }
}

function listSkillsBack ()
{
    $SkillManager = new SkillManager();
    $skills = $SkillManager->getSkills();
    require ('view/backend/manageSkillsView.php');
}

function deleteSkill($skill_id)
{
    $skillManager = new SkillManager();
    $affectedLines = $skillManager->skillDelete($skill_id);
    if ($affectedLines === false) {
        throw new Exception('Impossible de supprimer la compétence');
    }
    else {
        header('Location: console.php?action=manageSkills');
    }
}



