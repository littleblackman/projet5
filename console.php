<?php

require('controller/backend.php');

$accesdenied = 'Vous tentez d\'accéder à un espace réservé aux administrateurs !';

try {
    if ($_GET['action'] == 'admin') {
        require('view/backend/consolePanelView.php');
    } else {
        throw new Exception($accesdenied);
    }
}
catch(Exception $e) {
    ob_start();
    ?>

    <div id="errorPage">
        <p><?php echo 'Erreur : ' . $accesdenied; ?></p>
        <p>Retour à <a href="index.php">l'accueil</a></p>
    </div>

    <?php
    $content = ob_get_clean();
    require('view/backend/template.php');
}