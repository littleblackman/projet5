<?php

namespace App\Controller;
require "../vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Model\ProjectManager;
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

    public static function sendMail ()
    {
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = 1; // debugging:1 = erreurs et message, 2 = messages uniquement
            $mail->isSMTP(); //Paramétrer le Mailer pour utiliser SMTP
            $mail->Host = 'smtp.gmail.com'; //Host SMTP pour gmail
            $mail->SMTPAuth = true; //activer authentification SMTP
            $mail->Username = "contact@caroline-moulin.fr"; // l'adresse email d'envoi
            $mail->Password = ""; //le mot de passe de l'adresse gmail
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled OBLIGATOIRE pour gmail
            $mail->Port = 465; // 25 ou 465 pour gmail

            //Recipients
            $mail->setFrom('contact@caroline-moulin.fr'); //Personnaliser l\'envoyer
            $mail->addAddress('contact@caroline-moulin.fr');     //Ajouter le destinataire

            //Content
            $mail->isHTML(true);   //Paramétrer le format des emails en HTML
            $mail->Subject = 'Objet du message';
            $mail->Body = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message envoyé';
        } catch (Exception $e) {
            echo 'Le message ne peut pas être envoyé. Erreur du message: ', $mail->ErrorInfo;
        }
    }
}