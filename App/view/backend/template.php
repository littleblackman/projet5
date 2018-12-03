<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Portfolio de sites web">
    <meta name="author" content="Caroline Moulin">
    <!--Vcard Facebook-->
    <meta property="og:image" content="https://caroline-moulin.fr/public/images/" /><!-- TO DO-->
    <meta property="og:url" content="https://caroline-moulin.fr/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Portfolio de Caroline Moulin" />
    <meta property="og:description" content="Portfolio de sites web" />
    <!--Vcard twitter-->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="Portfolio de Caroline Moulin" />
    <meta name="twitter:creator" content="Caroline Moulin" />

    <title><?= $title ?></title>
    <link href="App/Vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="App/Public/css/full-slider.css" rel="stylesheet" />

</head>
<body>

<div id="content" class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="card my-4" id="quickNav">
                <div class="card-body">
                    <h5 class="card-header">Accès rapide</h5>
                    <div class="input-group">
                        <ul>
                            <li><a href="console.php?action=addProject">Ajout d'un projet</a></li>
                            <li><a href="console.php?action=manageProjects">Edition d'un projet</a></li>
                            <li><a href="console.php?action=addJob">Ajout d'une expérience</a></li>
                            <li><a href="console.php?action=manageJobs">Edition d'une expérience</a></li>
                            <li><a href="console.php?action=addTraining">Ajout d'une formation</a></li>
                            <li><a href="console.php?action=manageTrainings">Edition d'une formation</a></li>
                            <li><a href="console.php?action=addSkill">Ajout d'une compétence</a></li>
                            <li><a href="console.php?action=manageSkills">Edition d'une compétence</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="col-md-9">
            <h1 class="my-4"><strong>
                </strong></h1>
            <!-- <h5>Vous êtes ici : <?php echo $title; ?> </h5>-->
            <?= $content ?>

            <p> <a href="<?php echo $_SERVER["HTTP_REFERER"] ?>">Retour à la page Précédente</a></p>
            <p><a href="console.php?action=logout">Se déconnecter</a></p>

        </div>
    </div>
    <!-- /.row -->
</div>

</body>

</html>