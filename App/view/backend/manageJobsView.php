<?php $title = 'Gestion des expériences'; ?>

<?php ob_start(); ?>
    <div class="card">
        <table class="table-bordered table-striped table-responsive">
            <tr>
                <th scope="col">Entreprise</th>
                <th scope="col">Logo</th>
                <th scope="col">Poste occupé</th>
                <th scope="col">Missions</th>
                <th scope="col">Date début</th>
                <th scope="col">Date fin</th>
            </tr>
            <tr>
                <?php
                while ($data = $jobs->fetch()) {
                ?>
                <td><?php echo htmlspecialchars($data['entreprise']); ?></td>
                <td><img src="<?php echo htmlspecialchars($data['logo']); ?>"></td>
                <td><?php echo htmlspecialchars($data['position']); ?></td>
                <td><?php echo htmlspecialchars($data['missions']); ?></td>
                <td><?php echo htmlspecialchars($data['dateStart_fr']); ?></td>
                <td><?php echo htmlspecialchars($data['dateEnd_fr']); ?></td>
                <td><a href="console.php?action=editJobView&amp;id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-info">Editer</button></a></td>
                <td><a href="console.php?action=deleteJob&amp;id=<?php echo $data['id']; ?>" onclick="return confirm('Etes vous sur de vouloir supprimer cette expérience ?')"><button type="button" class="btn btn-danger">Supprimer</button></a></td>
            </tr>

            <?php
            }
            $jobs->closeCursor();
            ?>

        </table>
    </div>
<?php $content = ob_get_clean();
require('App/View/backend/template.php'); ?>