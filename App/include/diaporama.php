
<div class="card my-4">
    <div class="container-fluid">
        <div id="container_slider">
            <div id="carousel">
                <div class="item">
                    <div class="item_image">
                        <ul class="diaporama">

                            <?php
                            while ($data = $projects->fetch()) {
                            ?>
                            <li><a href="index.php?action=project&amp;id=<?= $data['id'] ?>" > <img id="diapo" src="<?php echo htmlspecialchars($data['image']); ?>" alt="projet"></a></li>
                                <?php
                            }
                            $projects->closeCursor();
                            ?>
                        </ul>

                        <!--

                            <a href="index.php?action=project&amp;id=<?= $data['id'] ?>" > <img id="diapo" src="<?php echo htmlspecialchars($data['image']); ?>" alt="projet"></a>
                        </div>
                        <div class="item__body">
                            <div class="item__title">
                                <?php echo htmlspecialchars($data['titleProject']); ?>
                            </div>
                        </div>
                        <div id="chevron"><a><i class="fa fa-arrow-left" aria-hidden="true" id="left"></i></a>
                            <a><i class="fa fa-arrow-right" aria-hidden="true" id="right"></i></a>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



