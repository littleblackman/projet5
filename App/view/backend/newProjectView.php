<?php $title = 'Page d\'administration'; ?>

<?php ob_start(); ?>
<div class="card">
    <h1 class="card-header">Ajout d'un nouveau projet</h1>

    <form action="console.php?action=newProject" method="post">
        <div class="form-group">
            <label>Titre du projet</label>
            <input type="text" class="form-control" id="titleProject" name="titleProject" placeholder="Titre du projet"  required>
        </div>
        <div class="form-group">
            <label>Description du projet</label><br>
            <textarea id="description" class="form-control" name="description" rows="15"></textarea>
        </div>
        <div>
            <label>Technologies</label><br>
            <input type="checkbox" name="origine" value="HTML5" id="HTML5"><label>HTML5</label>
            <input type="checkbox" name="origine" value="CSS3" id="CSS3"><label>CSS3</label>
            <input type="checkbox" name="origine" value="WordPress" id="WordPress"><label>WordPress</label>
            <input type="checkbox" name="origine" value="JavaScript" id="JavaScript"><label>JavaScript</label>
            <input type="checkbox" name="origine" value="PHP" id="PHP"><label>PHP</label>
            <input type="checkbox" name="origine" value="MySQL" id="MySQL"><label>MySQL</label>
            <input type="checkbox" name="origine" value="Bootstrap" id="Bootstrap"><label>Bootstrap</label>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="text" class="form-control" id="image" name="image" >
        </div>
        <div class="form-group">
            <label>Lien</label>
            <input type="text" class="form-control" id="link" name="link" >
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Ajouter le projet</button>
        </div>
    </form>
</div>
<?php
$content = ob_get_clean();

require('App/view/backend/template.php'); ?>

