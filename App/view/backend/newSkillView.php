<?php $title = 'Ajout d\'une compétence'; ?>

<?php ob_start(); ?>
<div class="card">
    <h1 class="card-header">Ajout d'une compétence</h1>

    <form action="console.php?action=newSkill" method="post">
        <div class="form-group">
            <label>Nom de la compétence</label>
            <input type="text" class="form-control" id="skill" name="skill" placeholder="Nom de la compétence"  required>
        </div>
        <div class="form-group">
            <label>Logo de la compétence</label><br>
            <input type="text" class="form-control" id="logo" name="logo" placeholder="Emplacement du logo"  required>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Ajouter la compétence</button>
        </div>
    </form>
</div>
<?php
$content = ob_get_clean();

require('App/view/backend/template.php'); ?>

