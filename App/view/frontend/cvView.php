<?php $title = 'Mon Parcours'; ?>

<?php ob_start(); ?>
    <div class="card my-4">
        <div class="card-body">
            <h5 class="card-header">Mes expériences</h5>
            <div class="input-group">
                <?php
                while ($data = $jobs->fetch()) {
                    ?>
                    <p> <?php echo htmlspecialchars($data['entreprise']); ?>
                        <img src="<?php echo htmlspecialchars($data['logo']); ?>" alt="logo"></p>
                    <p><?php echo htmlspecialchars($data['missions']); ?></p>
                    <p>De <?php echo htmlspecialchars($data['dateStart_fr']); ?>
                       à <?php echo htmlspecialchars($data['dateEnd_fr']); ?></p>
                    <?php
                }
                $jobs->closeCursor();
                ?>
            </div>
        </div>
    </div>
    <div class="card my-4">
        <div class="card-body">
            <h5 class="card-header">Mes formations</h5>
            <div class="input-group">
                <?php
                while ($data = $trainings->fetch()) {
                    ?>
                    <p><?php echo htmlspecialchars($data['graduate']); ?>
                    <?php echo htmlspecialchars($data['date']); ?>
                    <?php echo htmlspecialchars($data['institution']); ?></p>
                    <?php
                }
                $trainings->closeCursor();
                ?>
            </div>
        </div>
    </div>
    <div class="card my-4">
        <div class="card-body">
            <h5 class="card-header">Mes compétences</h5>
            <div class="input-group">
                <?php
                while ($data = $skills->fetch()) {
                    ?>
                    <p><?php echo htmlspecialchars($data['skill']); ?>
                    <?php echo htmlspecialchars($data['level']); ?></p>
                    <?php
                }
                $skills->closeCursor();
                ?>
            </div>
        </div>
    </div>

<?php
$content = ob_get_clean();

require('App/view/frontend/template.php'); ?>