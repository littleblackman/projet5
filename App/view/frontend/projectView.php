<?php $title = htmlspecialchars($project['title']); ?>

<?php ob_start(); ?>
<h1>Découvrez mon nouveau roman</h1>
<p><a href="index.php">Retour à l'accueil</a></p>

<div id="projects">
    <h3>
        <?= htmlspecialchars($project['titleProject']) ?>
        <em>le <?= $project['creation_date_fr'] ?></em>
    </h3>

    <p>
        <?= nl2br($project['content']) ?>
    </p>
</div>
<?php

$content = ob_get_clean();

require('template.php'); ?>