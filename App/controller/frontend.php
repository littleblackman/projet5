<?php

namespace App\Controller;

require "../vendor/autoload.php";
use App\Model\ProjectManager;
use App\Model\JobManager;
use App\Model\TrainingManager;
use App\Model\SkillManager;


class Frontend
{
    public static function listProjects()
    {
        $projectManager = new ProjectManager();
        $projects = $projectManager->getProjects();
        $modal = $projectManager->getProjects();
        require('App/View/frontend/hostView.php');
    }

    public static function project($projectId)
    {
        $projectManager = new ProjectManager();
        $modal = $projectManager->getProjects();
        require('App/View/frontend/hostView.php');
    }

    public static function path ()
    {
        $jobManager = new JobManager();
        $jobs = $jobManager->getJobs();
        $trainingManager = new TrainingManager();
        $trainings = $trainingManager->getTrainings();
        $SkillManager = new SkillManager();
        $skills = $SkillManager->getSkills();
    }

}