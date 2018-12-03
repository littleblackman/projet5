<?php $title = 'Gestion des compétences'; ?>

<?php ob_start(); ?>
    <div class="card">
        <table class="table-bordered table-striped table-responsive">
            <tr>
                <th scope="col">Compétence</th>
                <th scope="col">Logo</th>
            </tr>
            <tr>
                <?php
                while ($data = $skills->fetch()) {
                ?>
                <td><?php echo htmlspecialchars($data['skill']); ?></td>
                <td><img src="<?php echo htmlspecialchars($data['logo']); ?>"></td>
                <td><a href="console.php?action=editSkillView&amp;id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-info">Editer</button></a></td>
                <td><a href="console.php?action=deleteSkill&amp;id=<?php echo $data['id']; ?>" onclick="return confirm('Etes vous sur de vouloir supprimer cette compétence ?')"><button type="button" class="btn btn-danger">Supprimer</button></a></td>
            </tr>

            <?php
            }
            $skills->closeCursor();
            ?>

        </table>
    </div>
<?php $content = ob_get_clean();
require('App/View/backend/template.php'); ?>