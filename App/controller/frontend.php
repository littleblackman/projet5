<?php

namespace App\Controller;

require "../vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
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
        require('App/View/frontend/hostView.php');
    }

    public static function project($projectId)
    {
        if(isset($projectId)){
            $_GET['id'] = $projectId;
        }
        $projectManager = new ProjectManager();
        $project = $projectManager->getProject($_GET['id']);
        require('App/View/frontend/projectView.php');
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
           // $mail->SMTPDebug = 2; // debugging:1 = erreurs et message1.php, 2 = messages uniquement
            $mail->isSMTP(); //Paramétrer le Mailer pour utiliser SMTP
            $mail->Host = 'ssl0.ovh.net'; //Host SMTP pour gmail
            $mail->SMTPAuth = true; //activer authentification SMTP
            $mail->Username = "contact@caroline-moulin.fr"; // l'adresse email d'envoi
            $mail->Password = "xxx"; //le mot de passe de l'adresse gmail
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled OBLIGATOIRE pour gmail
            $mail->Port = 465; // 25 ou 465 pour gmail

            //Recipients
            $mail->setFrom('contact@caroline-moulin.fr'); //Personnaliser l\'envoyer
            $mail->addAddress('carolinemoulin84@gmail.com');     //Ajouter le destinataire

            //Content
            $mail->isHTML(true);   //Paramétrer le format des emails en HTML
            $mail->Subject = 'Contact du portfolio';
            $mail->Body = $_POST['message'];
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();

            echo 'Merci pour votre message';
            require ('App/View/frontend/messageView.php');

        } catch (Exception $e) {
            echo 'Le message ne peut pas être envoyé. Erreur du message: ', $mail->ErrorInfo;
            require ('App/View/frontend/messageView.php');

        }
    }
}