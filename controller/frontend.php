<?php

require_once('model/ProjectManager.php');

function listProjects()
{
    $projectManager = new \Portfolio\Model\ProjectManager();
    $projects = $projectManager->getProjects();
    require('view/frontend/hostView.php');
}