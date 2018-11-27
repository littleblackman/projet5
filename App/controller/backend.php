<?php

namespace App\Controller;
require "../vendor/autoload.php";

if(session_id() == '') {
    session_start();
}
use App\Model\ProjectManager;
use App\Model\JobManager;
use App\Model\SkillManager;
use App\Model\TrainingManager;
use App\Model\AuthManager;



class Backend
{
//VERIFICATION DE L'EXISTENCE D'UN MEMBRE EN BDD
    public static function verifyMember($userPass, $userPseudo)
    {
        $authManager = new AuthManager();
        $user = $authManager->getMember($userPseudo);
        //comparaison du mdp saisie avec le mdp hash de la bdd
        $isPasswordCorrect = password_verify($userPass, $user['pass']);
        //Si $member=false le membre n'est pas existant en bdd
        try{
            if (!$user)
            {
                throw new \Exception('Mauvais utilisateur ou mot de passe!');
            }
            else
                //Le membre existe 2 possibilité le mdp correspond
            {
                if ($isPasswordCorrect) {
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['pseudo'] = $user['pseudo'];
                    $_SESSION['pass'] = $user['pass'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['level'] = $user['level'];
                    //on redirige vers la page d'accueil qui prendra en compte les variable de session
                    header('location:console.php');
                }
                //Le mdp ne correspond pas
                else {
                    throw new \Exception('Mauvais utilisateur ou mot de passe!');
                }
            }
        }
        catch(\Exception $e){
            $authInfo = $e->getMessage();
            ob_start();
            ?>
            <div id="wrongPass">
                <p><?php  echo 'Erreur : ' . $e->getMessage(); ?></p>
                <?php include('include/login.php');?>
            </div>
            <?php
            $content = ob_get_clean();
            require('App/view/backend/template.php');
        }
    }

    //Projets
    public static function newProject($titleProject, $description, $techno, $image, $link)
    {
        $projectManager = new ProjectManager();
        $affectedLines = $projectManager->addProject($titleProject, $description, $techno, $image, $link);
        if ($affectedLines === false) {
            throw new \Exception('Impossible d\'ajouter un projet');
        }
        else {
            header('Location: console.php?action=manageProjects');
        }
    }

    public static function viewEditProject ($projectId)
    {
        $projectManager = new ProjectManager();
        $project = $projectManager->getProject($projectId);
        require ('App/view/backend/editProjectView.php');
    }

    public static function editProject ($id, $titleProject, $description, $techno, $image, $link)
    {
        $projectManager = new ProjectManager();
        $affectedLines = $projectManager->projectEdit($id, $titleProject, $description, $techno, $image, $link);
        if ($affectedLines === false) {
            throw new \Exception('Impossible de modifier le projet');
        }
        else{
            header('location: consolePanelView.php?action=project&id='.$id);
        }
    }

    public static function listProjectsBack ()
    {
        $projectManager = new ProjectManager();
        $projects = $projectManager->getProjects();
        require ('App/view/backend/manageProjectsView.php');
    }

    public static function deleteProject($projectId)
    {
        $projectManager = new ProjectManager();
        $affectedLines = $projectManager->projectDelete($projectId);
        if ($affectedLines === false) {
            throw new \Exception('Impossible de supprimer le projet');
        }
        else {
            header('Location: console.php?action=manageProject');
        }
    }
    //Expériences
    public static function newJob($entreprise, $logo, $position, $missions, $dateStart, $dateEnd)
    {
        $jobManager = new JobManager();
        $affectedLines = $jobManager->addJob($entreprise, $logo, $position, $missions, $dateStart, $dateEnd);
        if ($affectedLines === false) {
            throw new \Exception('Impossible d\'ajouter une expérience');
        }
        else {
            header('Location: console.php?action=manageJobs');
        }
    }

    public static function viewEditJob ($jobId)
    {
        $jobManager = new JobManager();
        $job = $jobManager->getJob($jobId);
        require ('App/view/backend/editJobView.php');
    }

    public static function editJob ($id, $entreprise, $logo, $position, $missions, $dateStart, $dateEnd)
    {
        $jobManager = new JobManager();
        $affectedLines = $jobManager->jobEdit($id, $entreprise, $logo, $position, $missions, $dateStart, $dateEnd);
        if ($affectedLines === false) {
            throw new \Exception('Impossible de modifier l\'expérience');
        }
        else{
            header('location: consolePanelView.php?action=job&id='.$id);
        }
    }

    public static function listJobsBack ()
    {
        $jobManager = new JobManager();
        $jobs = $jobManager->getJobs();
        require ('App/view/backend/manageJobsView.php');
    }

    public static function deleteJob($jobId)
    {
        $jobManager = new JobManager();
        $affectedLines = $jobManager->jobDelete($jobId);
        if ($affectedLines === false) {
            throw new \Exception('Impossible de supprimer l\'expérience');
        } else {
            header('Location: console.php?action=manageSkills');
        }
    }

    //formations
    public static function newTraining($graduate, $date, $institution)
    {
        $trainingManager = new TrainingManager();
        $affectedLines = $trainingManager->addTraining($graduate, $date, $institution);
        if ($affectedLines === false) {
            throw new \Exception('Impossible d\'ajouter une formation');
        }
        else {
            header('Location: console.php?action=manageTrainings');
        }
    }

    public static function viewEditTraining ($trainingId)
    {
        $trainingManager = new TrainingManager();
        $training = $trainingManager->getTraining($trainingId);
        require ('App/view/backend/editTrainingView.php');
    }

    public static function editTraining ($id, $graduate, $date, $institution)
    {
        $trainingManager = new TrainingManager();
        $affectedLines = $trainingManager->trainingEdit($id, $graduate, $date, $institution);
        if ($affectedLines === false) {
            throw new \Exception('Impossible de modifier la formation');
        }
        else{
            header('location: consolePanelView.php?action=training&id='.$id);
        }
    }

    public static function listTrainingsBack ()
    {
        $trainingManager = new TrainingManager();
        $trainings = $trainingManager->getTrainings();
        require ('App/view/backend/manageTrainingsView.php');
    }

    public static function deleteTraining($trainingId)
    {
        $trainingManager = new TrainingManager();
        $affectedLines = $trainingManager->trainingDelete($trainingId);
        if ($affectedLines === false) {
            throw new \Exception('Impossible de supprimer la formation');
        }
        else {
            header('Location: console.php?action=manageTrainings');
        }
    }
    //Compétences
    public static function newSkill($skill, $logo)
    {
        $skillManager = new SkillManager();
        $affectedLines = $skillManager->addSkill($skill, $logo);
        if ($affectedLines === false) {
            throw new \Exception('Impossible d\'ajouter une compétence');
        }
        else {
            header('Location: console.php?action=manageSkills');
        }
    }

    public static function viewEditSkill ($skillId)
    {
        $skillManager = new SkillManager();
        $skill = $skillManager->getSkill($skillId);
        require ('App/view/backend/editSkillView.php');
    }

    public static function editSkill ($id, $skill, $logo)
    {
        $SkillManager = new SkillManager();
        $affectedLines = $SkillManager->skillEdit($id, $skill, $logo);
        if ($affectedLines === false) {
            throw new \Exception('Impossible de modifier la compétence');
        }
        else{
            header('location: consolePanelView.php?action=skill&id='.$id);
        }
    }

    public static function listSkillsBack ()
    {
        $SkillManager = new SkillManager();
        $skills = $SkillManager->getSkills();
        require ('App/view/backend/manageSkillsView.php');
    }

    public static function deleteSkill($skill_id)
    {
        $skillManager = new SkillManager();
        $affectedLines = $skillManager->skillDelete($skill_id);
        if ($affectedLines === false) {
            throw new \Exception('Impossible de supprimer la compétence');
        }
        else {
            header('Location: console.php?action=manageSkills');
        }
    }

    public static function logout()
    {
        session_destroy ();
        header('location:console.php');
    }
}

