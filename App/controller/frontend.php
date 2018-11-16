<?php

namespace App\Controller;
require "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use App\Model\ProjectManager;
use App\Model\AuthManager;
use App\Model\UserManager;
use App\Model\JobManager;
use App\Model\TrainingManager;
use App\Model\SkillManager;
use App\Model\Recaptcha;

class Frontend
{
    public static function listProjects()
    {
        $projectManager = new ProjectManager();
        $projects = $projectManager->getProjects();
      require('App/view/frontend/hostView.php');
    }

    public static function project($projectId)
    {
        if(isset($projectId)){
            $_GET['id'] = $projectId;
        }
        $projectManager = new ProjectManager();
        $project = $projectManager->getProject($_GET['id']);
        require('App/view/frontend/projectView.php');
    }

    public static function path ()
    {
        $jobManager = new JobManager();
        $jobs = $jobManager->getJobs();
        $trainingManager = new TrainingManager();
        $trainings = $trainingManager->getTrainings();
        $SkillManager = new SkillManager();
        $skills = $SkillManager->getSkills();
        require ('App/View/frontend/cvView.php');
    }

    public static function sendMail (){
        $mail = new PHPMailer();
        $mail->isSMTP(); //Paramétrer le Mailer pour utiliser SMTP
        $mail->SMTPDebug = 1; // debugging:1 = erreurs et message, 2 = messages uniquement
        $mail->SMTPAuth = true; //activer authentification SMTP
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled OBLIGATOIRE pour gmail
        $mail->Host = 'smtp.gmail.com'; //Host SMTP pour gmail
        $mail->Port = 465; // 25 ou 465 pour gmail
        $mail->Username = "carolinemoulin84@gmail.com"; // l'adresse email d'envoi
        $mail->Password = "Chris1609"; //le mot de passe de l'adresse gmail

// Expéditeur
        $mail->setFrom('carolinemoulin84@gmail.com'); //Personnaliser l'envoyer
// Destinataire
        $mail->AddAddress('carolinemoulin84@gmail.com'); //Ajouter le destinataire
// Objet
        $mail->Subject = 'Objet du message';

// Votre message
        $mail->isHTML(true); //Paramétrer le format des emails en HTML

// Envoi du mail avec gestion des erreurs
        if(!$mail->send())
        {
            exit($mail->ErrorInfo());
        }
    }

}