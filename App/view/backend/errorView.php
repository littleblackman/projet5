<?php $title = 'Erreur'; ?>

<?php ob_start(); ?>
<div class="card my-4">
    <div class="card-body">
        <p><?php  echo 'Erreur : ' . $e->getMessage(); ?></p>
        <p><a href="admin.php">Se connecter</a></p>
        <p><a href="index.php">Retour à l'accueil</a></p>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
