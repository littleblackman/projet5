<?php

require "vendor/autoload.php";

use App\Controller\Frontend;

$myFront = new Frontend();

$accesdenied = 'Vous tentez d\'accéder à un espace réservé aux administrateurs !';
try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listProjects') {
            $myFront::listProjects();
        }
        //Affichage projet complet
        elseif ($_GET['action'] == 'project') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $projectId = $_GET['id'];
                $myFront::project($projectId);
            }
        }elseif ($_GET['action'] == 'path') {
            $myFront::path();
        }
        //Envoi d'un mail de contact
        elseif ($_GET['action'] == 'contact') {
            if (isset($_POST['name']) && !empty($_POST['name'])
                && isset($_POST['email']) && !empty($_POST['email'])
                && isset($_POST['message']) && !empty($_POST['name']))
            {
                $myFront::sendMail();
            }else{
                throw new Exception('Tous les champs ne sont pas remplis');
            }
        }
        else {
    require('App/view/frontend/hostView.php');
}
    }else {
        $myFront::listProjects();
     // require('App/view/frontend/hostView.php');
    }
}

catch(\Exception $e) {
        ob_start();
        ?>

        <div id="errorPage">
            <p><?php  echo 'Erreur : ' . $accesdenied; ?></p>
            <p>Retour à <a href="index.php">l'accueil</a></p>
        </div>

        <?php
        $content = ob_get_clean();
        require('App/view/frontend/template.php');
    }