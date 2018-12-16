<section class="portfolio" id="portfolio">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Portfolio</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <?php
            while ($data = $projects->fetch()) {

            ?>
            <div class="col-md-8 col-lg-6">
                <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-<?= $data['id'] ?>">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                            <i class="fas fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img  class="img-fluid" src="<?php echo htmlspecialchars($data['image']); ?>" alt="projet">
                </a>

            </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>

<!-- Portfolio Modal  -->
<?php
while ($data2 = $modal->fetch()) {
    ?>

    <div class="portfolio-modal mfp-hide" id="portfolio-modal-<?= $data2['id'] ?>">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0"><?= htmlspecialchars($data2['titleProject']) ?></h2>
                        <hr class="star-dark mb-5">
                        <img class="img-fluid mb-5" src="<?php echo htmlspecialchars($data2['image']); ?>" alt="projet">
                        <p class="mb-5"><?= nl2br($data2['description']) ?></p>
                        <p class="mb-5"><?= nl2br($data2['techno']) ?></p>
                        <p class="mb-5"><a href="<?= nl2br($data2['link']) ?>" class="link" target="_blank">Voir le site du projet</a></p>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Fermer le projet</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>