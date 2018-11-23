
<div class="card my-4">
    <div class="container-fluid">
        <div id="container_slider">
                    <div class="owl-carousel owl-theme owl-loaded">
                        <div class="owl-stage-outer">
                        <div class="owl-stage">
                        <?php
                        while ($data = $projects->fetch()) {
                        ?>
                        <div class="owl-item">

                            <a href="index.php?action=project&amp;id=<?= $data['id'] ?>" > <img  id="diapo" src="<?php echo htmlspecialchars($data['image']); ?>" alt="projet"></a>
                            <h3><?php echo htmlspecialchars($data['titleProject']); ?></h3>
                        </div>
                                <?php
                            }
                            $projects->closeCursor();
                            ?>
                        </div>
                        </div>
                    </div>

            <div class="owl-dots">
                <div class="owl-dot active"></div>
                <div class="owl-dot"></div>
                <div class="owl-dot"></div>
            </div>
        </div>
    </div>
</div>
