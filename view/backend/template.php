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
    <link href="public/css/stylish-portfolio.css" rel="stylesheet" />
</head>
<body>

<div id="content" class="container-fluid">
    <div class="row">
               <!-- Content -->
        <div class="col-md-12">
            <h1 class="my-4"><strong>
                </strong></h1>
           <!-- <h5>Vous êtes ici : <?php echo $title; ?> </h5>-->
            <?= $content ?>
            <p><a href="<?php echo $_SERVER["HTTP_REFERER"] ?>">Retour à la page Précédente</a></p>

        </div>
    </div>
    <!-- /.row -->
</div>

</body>

</html>