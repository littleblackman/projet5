<?php

require "vendor/autoload.php";
require_once('model/ProjectManager.php');
require_once('model/SkillManager.php');

function newProject($titleProject, $description, $techno, $image, $link)
{
    $ProjectManager = new ProjectManager();
    $affectedLines = $ProjectManager->addProject($titleProject, $description, $techno, $image, $link);
    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter un projet');
    }
    else {
        header('Location: consolePanelView.php?action=admin');
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
    $ProjectManager = new ProjectManager();
    $affectedLines = $ProjectManager->projectEdit($id, $titleProject, $description, $techno, $image, $link);
    if ($affectedLines === false) {
        throw new Exception('Impossible de modifier le projet');
    }
    else{
        header('location: consolePanelView.php?action=project&id='.$id);
    }
}

function listProjectsBack ()
{
    $ProjectManager = new ProjectManager();
    $projects = $ProjectManager->getProjects();
    require ('view/backend/manageProjectsView.php');
}

function deleteProject($project_id)
{
    $projectManager = new ProjectManager();
    $affectedLines = $projectManager->projectDelete($project_id);
    if ($affectedLines === false) {
        throw new Exception('Impossible de supprimer le projet');
    }
    else {
        header('Location: console.php?action=manageProjects');
    }
}

function newSkill($skill, $level)
{
    $skillManager = new SkillManager();
    $affectedLines = $skillManager->addSkill($skill, $level);
    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter une compétence');
    }
    else {
        header('Location: consolePanelView.php?action=admin');
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



