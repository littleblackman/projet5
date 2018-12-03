<?php $title = 'Editer une compétence'; ?>


<?php ob_start(); ?>
<div class="card my-4">
    <div class="card-body">
        <h3 class="card-header">Edition d'une compétence</h3>
        <form action="console.php?action=editSkill&id=<?php echo $skill['id'] ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Compétence</label>
                <input type="text" class="form-control" id="skill" name="skill" placeholder="Compétence" value="<?php echo $skill['skill']; ?>" required>
            </div>
            <div class="form-group">
                <label>Logo</label><br>
                <input type="text" class="form-control" id="logo" name="logo" value="<?php echo $skill['logo']; ?>">
            </div>

            <button id="postButton" type="submit" class="btn btn-primary">Publier</button>

        </form>
    </div>
</div>

<?php $content = ob_get_clean(); ?>


<?php require('App/View/backend/template.php'); ?>
