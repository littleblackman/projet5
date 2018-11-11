<?php
//namespace App;
require "vendor/autoload.php";

use App\Controller\Frontend;

$myFront = new Frontend();

$accesdenied = 'Vous tentez d\'accéder à un espace réservé aux administrateurs !';
try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listProjects') {
            $myFront::listProjectsBack();
        }
//Accueil
        //Login d'un membre existant
        elseif ($_GET['action'] == 'login'){
            if (isset($_POST['userPseudo']) && !empty($_POST['userPseudo']) && isset($_POST['userPass']) && !empty($_POST['userPass']))
            {
                $myFront::verifyMember($_POST['userPass'], $_POST['userPseudo']);
            }else{
                throw new \Exception('Tous les champs ne sont pas remplis');
            }
        }
        //redirection vers la View de creation de membre
        elseif ($_GET['action'] == 'creationUser') {
            require('App/view/frontend/newAccountView.php');
        }
        //Creation d'un nouveau membre
        elseif ($_GET['action'] == 'addMember') {
            if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])
                && isset($_POST['email']) && !empty($_POST['email'])
                && isset($_POST['pass']) && !empty($_POST['pass'])
                && isset($_POST['pass2']) && !empty($_POST['pass2']))
            {

                $myFront::addMember($_POST['pseudo'], $_POST['email'], $_POST['pass'], $_POST['pass2']);			
//                \App\controller\frontend::addMember($_POST['pseudo'], $_POST['email'], $_POST['pass'], $_POST['pass2']  );
            }else {
               throw new \Exception('Tous les champs ne sont pas remplis');
            }
        }
        //logout membre
        elseif ($_GET['action'] == 'logout'){
            $myFront::logout();
        }
    }
//Affichage projet complet
    elseif ($_GET['action'] == 'project') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $myFront::project();
        }
        else {
            throw new Exception('Aucun identifiant de projet envoyé');
        }
    }
    else {
        require('App/view/frontend/hostView.php');
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