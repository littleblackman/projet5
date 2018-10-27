<?php $title = 'Ajout d\'une compétence'; ?>

<?php ob_start(); ?>

<h1>Ajout d'une compétence</h1>

<form action="console.php?action=newSkill" method="post">
    <div class="form-group">
        <label>Nom de la compétence</label>
        <input type="text" class="form-control" id="skill" name="skill" placeholder="Nom de la compétence"  required>
    </div>
    <div class="form-group">
        <label>Niveau de la compétence</label><br>
        <input type="number" class="form-control" id="level" name="level" placeholder="Niveau de la compétence"  required>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Ajouter la compétence</button>
    </div>
</form>

<?php
$content = ob_get_clean();

require('view/backend/template.php'); ?>
