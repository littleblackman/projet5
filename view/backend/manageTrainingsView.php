<?php $title = 'Gestion des formations'; ?>

<?php ob_start(); ?>

    <table class="table-bordered table-striped table-responsive">
        <tr>
            <th scope="col">Diplôme</th>
            <th scope="col">Année</th>
            <th scope="col">Etablissement</th>
        </tr>
        <tr>
            <?php
            while ($data = $trainings->fetch()) {
            ?>
            <td><?php echo htmlspecialchars($data['graduate']); ?></td>
            <td><?php echo htmlspecialchars($data['date']); ?></td>
            <td><?php echo htmlspecialchars($data['institution']); ?></td>
            <td><a href="index.php?action=editProjectView&amp;id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-info">Editer</button></a></td>
            <td><a href="index.php?action=deleteProject&amp;id=<?php echo $data['id']; ?>" onclick="return confirm('Etes vous sur de vouloir supprimer cette compétence ?')"><button type="button" class="btn btn-danger">Supprimer</button></a></td>
        </tr>

        <?php
        }
        $trainings->closeCursor();
        ?>

    </table>

<?php $content = ob_get_clean();
require('view/backend/template.php'); ?>