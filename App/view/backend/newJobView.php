<?php $title = 'Ajout d\'une expérience'; ?>

<?php ob_start(); ?>
<div class="card">
    <h1 class="card-header">Ajout d'une expérience</h1>

    <form action="console.php?action=newJob" method="post">
        <div class="form-group">
            <label>Nom de l'entreprise</label>
            <input type="text" class="form-control" id="entreprise" name="entreprise" placeholder="Nom de l'entreprise"  required>
        </div>
        <div class="form-group">
            <label>Logo</label>
            <input type="text" class="form-control" id="logo" name="logo" placeholder="emplacement de l'image du logo"  required>
        </div>
        <div class="form-group">
            <label>Missions</label>
            <input type="text" class="form-control" id="missions" name="missions" placeholder="Missions"  required>
        </div>
        <div class="form-group">
            <label>Date de début</label>
            <input type="text" class="form-control" id="dateStart" name="dateStart" placeholder="Date de début"  required>
        </div>
        <div class="form-group">
            <label>Date de fin</label>
            <input type="text" class="form-control" id="dateEnd" name="dateEnd" placeholder="Date de fin"  required>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Ajouter l'expérience</button>
        </div>
    </form>
</div>
<?php
$content = ob_get_clean();

require('App/view/backend/template.php'); ?>

