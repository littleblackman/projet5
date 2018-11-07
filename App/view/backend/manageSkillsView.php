<?php $title = 'Gestion des compétences'; ?>

<?php ob_start(); ?>
    <div class="card">
        <table class="table-bordered table-striped table-responsive">
            <tr>
                <th scope="col">Compétence</th>
                <th scope="col">Niveau</th>
            </tr>
            <tr>
                <?php
                while ($data = $skills->fetch()) {
                ?>
                <td><?php echo htmlspecialchars($data['skill']); ?></td>
                <td><?php echo htmlspecialchars($data['level']); ?></td>

                <td><a href="index.php?action=editProjectView&amp;id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-info">Editer</button></a></td>
                <td><a href="index.php?action=deleteProject&amp;id=<?php echo $data['id']; ?>" onclick="return confirm('Etes vous sur de vouloir supprimer cette compétence ?')"><button type="button" class="btn btn-danger">Supprimer</button></a></td>
            </tr>

            <?php
            }
            $skills->closeCursor();
            ?>

        </table>
    </div>
<?php $content = ob_get_clean();
require('view/backend/template.php'); ?>