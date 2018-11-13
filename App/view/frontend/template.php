<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Portfolio de sites web">
    <meta name="author" content="Caroline Moulin">

    <meta property="og:image" content="https://caroline-moulin.fr/public/images/" /> <!-- TO DO -->
    <meta property="og:url" content="https://caroline-moulin.fr/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Portfolio de Caroline Moulin" />
    <meta property="og:description" content="Portfolio de sites web" />
    <!--Vcard twitter-->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="Portfolio de Caroline Moulin" />
    <meta name="twitter:creator" content="Caroline Moulin" />

    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
    <script src="App/public/js/main.js" async></script>
    <script src="https://use.fontawesome.com/854d45b8f4.js"></script>
    <link href="App/public/css/full-slider.css" rel="stylesheet" />
 <!--   <script src='https://www.google.com/recaptcha/api.js'></script>-->
</head>
<body>

<div id="content" class="container-fluid">
    <div class="row">
        <?= $content ?>

    </div>

</div>

<?php include("App/include/footer.php"); ?>


</body>

</html>