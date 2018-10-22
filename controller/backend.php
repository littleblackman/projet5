<?php

require_once('model/ProjectManager.php');

function newProject($titleProject, $description, $techno, $image, $link)
{
    $ProjectManager = new Portfolio\Model\ProjectManager();
    $affectedLines = $ProjectManager->addProject($titleProject, $description, $techno, $image, $link);
    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter un projet');
    }
    else {
        header('Location: console.php?action=admin');
    }
}

function viewEditProject ($projectId)
{
    $projectManager = new Portfolio\Model\projectManager();
    $project = $projectManager->getProject($projectId);
    require ('view/backend/editProjectView.php');
}

function editProject ($id, $titleProject, $description, $techno, $image, $link)
{
    $PostManager = new Portfolio\Model\ProjectManager();
    $affectedLines = $PostManager->projectEdit($id, $titleProject, $description, $techno, $image, $link);
    if ($affectedLines === false) {
        throw new Exception('Impossible de modifier le projet');
    }
    else{
        header('location: console.php?action=project&id='.$id);
    }
}

