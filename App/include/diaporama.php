<?php
while ($data = $projects->fetch()) {
    ?><div class="card my-4">
    <div class="container-fluid">
        <div id="container_slider">
            <div id="carousel">

                <div class="item">
                    <div class="item__image">
                        <a href="index.php?action=project&amp;id=<?= $data['id'] ?>" ><img src="<?php echo htmlspecialchars($data['image']); ?>" alt="projet"></a>
                    </div>
                    <div class="item__body">
                        <div class="item__title">
                            <?php echo htmlspecialchars($data['titleProject']); ?>
                        </div>
                        <div class="item__description">
                            <!--Ici une petite description pour tester le carousel-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
$projects->closeCursor();
?>


