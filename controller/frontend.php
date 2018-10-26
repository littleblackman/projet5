<?php

require "vendor/autoload.php";
require_once('model/ProjectManager.php');

function listProjects()
{
    $projectManager = new ProjectManager();
    $projects = $projectManager->getProjects();
    require('view/frontend/hostView.php');
}