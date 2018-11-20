<?php $title = 'Gestion des formations'; ?>

<?php ob_start(); ?>
    <div class="card">
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
                <td><a href="console.php?action=editTrainingView&amp;id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-info">Editer</button></a></td>
                <td><a href="console.php?action=deleteTraining&amp;id=<?php echo $data['id']; ?>" onclick="return confirm('Etes vous sur de vouloir supprimer cette compétence ?')"><button type="button" class="btn btn-danger">Supprimer</button></a></td>
            </tr>

            <?php
            }
            $trainings->closeCursor();
            ?>

        </table>
    </div>
<?php $content = ob_get_clean();
require('App/view/backend/template.php'); ?>