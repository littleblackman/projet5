<?php $title = 'Gestion des projets'; ?>

<?php ob_start(); ?>
    <header class="masthead bg-primary text-white text-center">
        <div class="container">
            <h1 class="text-uppercase mb-0">Gestion des projets</h1>
            <hr class="star-light">
        </div>
    </header>
    <section class="bg-primary text-white mb-0" id="about">
        <div class="container">
            <h2 class="text-center text-uppercase text-white">Ajouter, modifier, supprimer des projets</h2>
            <hr class="star-light mb-5">
            <div class="row">
                <div class="col-lg-12 ml-auto">
                    <p class="lead">
                       <table class="table-bordered table-striped table-responsive">
                        <tr>
                            <th scope="col">Titre</th>
                            <th scope="col">Description</th>
                            <th scope="col">Technologie</th>
                            <th scope="col">Image</th>
                            <th scope="col">Lien</th>
                        </tr>
                        <tr>
                            <?php
                            while ($data = $projects->fetch()) {
                            ?>
                            <td><?php echo htmlspecialchars($data['titleProject']); ?></td>
                            <td><?php echo htmlspecialchars($data['description']); ?></td>
                            <td><?php echo htmlspecialchars($data['techno']); ?></td>
                            <td><img src="<?php echo htmlspecialchars($data['image']); ?>"></td>
                            <td><?php echo htmlspecialchars($data['link']); ?></td>
                            <td><a href="console.php?action=editProjectView&amp;id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-info">Editer</button></a></td>
                            <td><a href="console.php?action=deleteProject&amp;id=<?php echo $data['id']; ?>" onclick="return confirm('Etes vous sur de vouloir supprimer ce projet ?')"><button type="button" class="btn btn-danger">Supprimer</button></a></td>
                        </tr>

                        <?php
                        }
                        $projects->closeCursor();
                        ?>

                    </table>
                </div>
            </div>
        </div>
    </section>
<?php $content = ob_get_clean();
require('App/View/backend/template.php'); ?>