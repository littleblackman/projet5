<?php $title = 'Editer une formation'; ?>


<?php ob_start(); ?>
<div class="card my-4">
    <div class="card-body">
        <h3 class="card-header">Edition d'une formation</h3>
        <form action="console.php?action=editTraining&id=<?php echo $training['id'] ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Diplôme</label>
                <input type="text" class="form-control" id="graduate" name="graduate" placeholder="Diplôme" value="<?php echo $training['graduate']; ?>" required>
            </div>
            <div class="form-group">
                <label>Année d'optention</label><br>
                <input type="text" class="form-control" id="date" name="date" value="<?php echo $training['date']; ?>">
            </div>
            <div class="form-group">
                <label>Etablissement</label><br>
                <textarea id="institution" class="form-control" name="institution" rows="10"><?php echo $training['institution']; ?></textarea>
            </div>

            <button id="postButton" type="submit" class="btn btn-primary">Publier</button>

        </form>
    </div>
</div>

<?php $content = ob_get_clean(); ?>


<?php require('App/view/backend/template.php'); ?>
