<?php
namespace App\Controller;
require "vendor/autoload.php";

use App\Model\UserManager;
use App\model\ProjectManager;
use App\model\AuthManager;

class Frontend
{
    public static function listProjects($projectId)
    {
        $projectManager = new ProjectManager();
        $project = $projectManager->getProject($projectId);
        require('App/view/frontend/hostView.php');
    }
    public static function project($projectId)
    {
        $projectManager = new ProjectManager();
        $project = $projectManager->getProject($_GET['id']);
        require('view/frontend/projectView.php');
    }

    public static function listProjectsBack ()
    {
        $projectManager = new ProjectManager();
        $projects = $projectManager->getProjects();
        require ('App/view/frontend/manageProjectsView.php');
    }

//VERIFICATION DE L'EXISTENCE D'UN MEMBRE EN BDD
    public static function verifyMember($userPass, $userPseudo)
    {
        $authManager = new AuthManager();
        $member = $authManager->getMember($userPseudo);
        //comparaison du mdp saisie avec le mdp hash de la bdd
        $isPasswordCorrect = password_verify($userPass, $member['pass']);
        //Si $member=false le membre n'est pas existant en bdd
        try {
            if (!$member) {
                throw new \Exception('Mauvais utilisateur ou mot de passe!');
            } else //Le membre existe 2 possibilité le mdp correspond
            {
                if ($isPasswordCorrect) {
                    $_SESSION['id'] = $member['id'];
                    $_SESSION['pseudo'] = $member['pseudo'];
                    $_SESSION['pass'] = $member['pass'];
                    $_SESSION['email'] = $member['email'];
                    $_SESSION['userLevel'] = $member['userLevel'];
                    //on redirige vers la page d'accueil qui prendra en compte les variable de session
                    header('location:index.php');
                } //Le mdp ne correspond pas
                else {
                    throw new \Exception('Mauvais utilisateur ou mot de passe!');
                }
            }
        } catch (\Exception $e) {
            $authInfo = $e->getMessage();
            ob_start();
            ?>
            <div id="wrongPass">
                <p><?php echo 'Erreur : ' . $e->getMessage(); ?></p>
                <?php include('include/login.php'); ?>
                <p>Pas de compte ? <a href="index.php?action=creationUser">Créer un compte</a></p>
            </div>
            <?php
            $content = ob_get_clean();
            require('App/view/frontend/template.php');
        }
    }
    public static function addMember($pseudo, $email, $pass, $pass2)
    {
        try {
            $userManager = new UserManager();
            //Vérification de l'existance ou non du pseudo dans la bdd et verification sur les champs du formulaire
            $checkMember = $userManager->checkPseudo($pseudo);
            if (!$checkMember) {
                if (preg_match('#[a-zA-Z0-9_]#', $pseudo)) {
                    if ($pass == $pass2) {
                        if (preg_match(" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $email)) {
                            $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
                            //envoi au modele pour insertion dans BDD
                            $push = $userManager->pushMember($pseudo, $pass_hash, $email);
                            throw new \Exception('Votre compte a été créé avec succès');
                        } else {
                            throw new \Exception('veuillez vérifier votre adresse email');
                        }
                    } else {
                        throw new \Exception('Les mots de passe ne correspondent pas');
                    }
                } else {
                    throw new \Exception('Un ou plusieurs caractères non autorisé dans le mot de passe');
                }
            } else {
                throw new \Exception('Ce pseudo est déjà utilisé');
            }
        } catch (\Exception $e) {
            $info = $e->getMessage();
            require('App/view/frontend/hostView.php');
        }
    }

    public static function logout()
    {
        session_destroy();
        header('location:index.php');
    }

}