<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Portfolio de sites web">
    <meta name="author" content="Caroline Moulin">

    <meta property="og:image" content="https://billet-simple-alaska.caroline-moulin.fr/public/images/adventure-alaska.jpg" />
    <meta property="og:url" content="https://billet-simple-alaska.caroline-moulin.fr/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Portfolio de Caroline Moulin" />
    <meta property="og:description" content="Portfolio de sites web" />
    <!--Vcard twitter-->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="Portfolio de Caroline Moulin" />
    <meta name="twitter:creator" content="Caroline Moulin" />

    <title><?= $title ?></title>
    <link href="public/css/stylish-portfolio.css" rel="stylesheet" />
</head>
<body>

<div id="content" class="container-fluid">
    <div class="row">
        <!-- Sidebar Widgets Column -->
        <div class="col-md-3">

            <div class="card my-4" id="quickNav">
                <div class="card-body">
                    <h5 class="card-header">Accès rapide</h5>
                    <div class="input-group">
                        <ul>
                            <li><a href="index.php?action=admin">Accueil administration</a></li>
                            <li><a href="index.php?action=addNewProject">Ajout d'un projet</a></li>
                            <li><a href="index.php?action=managePosts">Editer / supprimer un projet</a>
                            <li><a href="index.php?action=addNewJob">Ajout d'une expérience</a></li>
                            <li><a href="index.php?action=manageJobs">Editer / supprimer une expérience</a></li>
                            <li><a href="index.php?action=addNewFormation">Ajout d'une formation</a></li>
                            <li><a href="index.php?action=manageFormations">Gestion des formations</a></li>
                            <li><a href="index.php?action=addNewSkill">Ajout d'une compétence</a></li>
                            <li><a href="index.php?action=manageSkills">Editer / supprimer une compétence</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Entries Column -->
        <div class="col-md-9">
            <h1 class="my-4"><strong>
                </strong></h1>
            <h5>Vous êtes ici : <?php echo $title; ?> </h5>
            <?= $content ?>
            <p><a href="<?php echo $_SERVER["HTTP_REFERER"] ?>">Retour à la page Précédente</a></p>

        </div>
    </div>
    <!-- /.row -->
</div>

</body>

</html>