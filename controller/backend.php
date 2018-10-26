<?php

require "vendor/autoload.php";
require_once('model/ProjectManager.php');

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
    $PostManager = new ProjectManager();
    $affectedLines = $PostManager->projectEdit($id, $titleProject, $description, $techno, $image, $link);
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

