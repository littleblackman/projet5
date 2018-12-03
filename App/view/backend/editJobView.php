<?php $title = 'Editer une expérience'; ?>


<?php ob_start(); ?>
<div class="card my-4">
    <div class="card-body">
        <h3 class="card-header">Edition d'une expérience</h3>
        <form action="console.php?action=editJob&id=<?php echo $job['id'] ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Entreprise</label>
                <input type="text" class="form-control" id="entreprise" name="entreprise" placeholder="Entreprise" value="<?php echo $job['entreprise']; ?>" required>
            </div>
            <div class="form-group">
                <label>Logo</label><br>
                <input type="text" class="form-control" id="logo" name="logo" value="<?php echo $job['logo']; ?>" placeholder="Emplacement de l'image">
            </div>
            <div class="form-group">
                <label>Poste occupé</label><br>
                <input type="text" class="form-control" id="position" name="position" value="<?php echo $job['position']; ?>">
            </div>
            <div class="form-group">
                <label>Missions</label><br>
                <textarea id="missions" class="form-control" name="missions" rows="10"><?php echo $job['missions']; ?></textarea>
            </div>
            <div class="form-group">
                <label>Date de début</label>
                <input type="text" class="form-control" id="dateStart" name="dateStart" value="<?php echo $job['dateStart']; ?>">
            </div>
            <div class="form-group">
                <label>Date de fin</label>
                <input type="text" class="form-control" id="dateEnd" name="dateEnd" value="<?php echo $job['dateEnd']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Publier</button>

        </form>
    </div>
</div>

<?php $content = ob_get_clean(); ?>


<?php require('App/View/backend/template.php'); ?>
