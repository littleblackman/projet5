<?php $title = 'Gestion des projets'; ?>

<?php ob_start(); ?>

       <table class="table-bordered table-striped table-responsive">
        <tr>
            <th scope="col">Titre</th>
            <th scope="col">Description</th>
            <th scope="col">Technologie</th>
            <th scope="col">image</th>
            <th scope="col">lien</th>
        </tr>
        <tr>
            <?php
            while ($data = $projects->fetch()) {
            ?>
            <td><?php echo htmlspecialchars($data['titleProject']); ?></td>
            <td><?php echo htmlspecialchars($data['description']); ?></td>
            <td><?php echo htmlspecialchars($data['techno']); ?></td>
            <td><?php echo htmlspecialchars($data['image']); ?></td>
            <td><?php echo htmlspecialchars($data['link']); ?></td>
            <td><a href="index.php?action=editProjectView&amp;id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-info">Editer</button></a></td>
            <td><a href="index.php?action=deleteProject&amp;id=<?php echo $data['id']; ?>" onclick="return confirm('Etes vous sur de vouloir supprimer ce projet ?')"><button type="button" class="btn btn-danger">Supprimer</button></a></td>
        </tr>

        <?php
        }
        $projects->closeCursor();
        ?>

    </table>

<?php $content = ob_get_clean();
require('view/backend/template.php'); ?>