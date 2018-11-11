<div class="card my-4">
    <div class="container-fluid">
        <div id="container_slider">
            <div class="carousel__container">
                <div class="carousel__item">
                    <?php
                    while ($data = $projects->fetch()) {
                        ?>

                        <div><a href="index.php?action=project&amp;id=<?= $data['id'] ?>" ><img src="<?php echo htmlspecialchars($data['image']); ?>"></a></div>

                        <div class="carousel__title"><?php echo htmlspecialchars($data['titleProject']); ?></div>
                        <?php
                    }
                    $projects->closeCursor();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>