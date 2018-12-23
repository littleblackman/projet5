<?php

namespace App\Controller;

require "../vendor/autoload.php";
use App\Model\ProjectManager;
use App\Model\JobManager;
use App\Model\TrainingManager;
use App\Model\SkillManager;


class Frontend
{
    public function listProjects()
    {
        $projectManager = new ProjectManager();
        $projects = $projectManager->getProjects();
        $formations = $projectManager->getFormations();
        require('App/View/frontend/hostView.php');
    }

    public function path ()
    {
        $jobManager = new JobManager();
        $jobs = $jobManager->getJobs();
        $trainingManager = new TrainingManager();
        $trainings = $trainingManager->getTrainings();
        $SkillManager = new SkillManager();
        $skills = $SkillManager->getSkills();
    }

}
