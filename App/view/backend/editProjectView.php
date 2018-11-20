<?php $title = 'Editer un projet'; ?>


<?php ob_start(); ?>
<div class="card my-4">
    <div class="card-body">
            <h3 class="card-header">Edition d'un projet</h3>
            <form action="console.php?action=editProject&id=<?php echo $project['id'] ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Titre</label>
                    <input type="text" class="form-control" id="titleProject" name="titleProject" placeholder="Titre du projet" value="<?php echo $project['titleProject']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Description du Projet</label><br>
                    <textarea id="description" class="form-control" name="description" rows="10"><?php echo $project['description']; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Technologie</label><br>
                    <input type="text" class="form-control" id="techno" name="techno" placeholder="Titre du projet" value="<?php echo $project['techno']; ?>">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="text" class="form-control" id="image" name="image" value="<?php echo $project['image']; ?>">
                </div>
                <div class="form-group">
                    <label>Lien</label>
                    <input type="text" class="form-control" id="link" name="link" value="<?php echo $project['link']; ?>">
                </div>
                <button id="postButton" type="submit" class="btn btn-primary">Publier</button>

            </form>
    </div>
</div>

<?php $content = ob_get_clean(); ?>


<?php require('App/view/backend/template.php'); ?>
