<div class="card my-4">
        <div class="container-fluid">
            <div id="container_slider">
                    <div class="carousel__container">
                        <div class="carousel__item">
                            <?php
                            while ($data = $project->fetch()) {
                                ?>
                                <div><?php echo htmlspecialchars($data['titleProject']); ?></div>
                                <div><img src="<?php echo htmlspecialchars($data['image']); ?>"></div>

                                <?php
                            }
                            $project->closeCursor();
                            ?>
                        </div>
                    </div>
              </div>
        </div>
    </div>