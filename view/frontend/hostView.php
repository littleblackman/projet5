<?php $title = 'Portfolio de Caroline MOULIN'; ?>

<?php ob_start(); ?>

    <!--diaporama-->
    <div class="card my-4">
        <div class="container-fluid">
            <div id="container_slider">
                <div id="slider">
                    <figure>
                        <img src="public/img/visuel_mode-emploi.jpg" id="diapo" alt="img1">
                        <figcaption id="texte_diapo">Découvrez mes travaux</figcaption>
                    </figure>
                </div>
                <div id="chevron"><a><i class="fa fa-arrow-left" aria-hidden="true" id="left"></i></a>
                    <a><i class="fa fa-arrow-right" aria-hidden="true" id="right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--Expérience/CV-->
    <div class="card my-4">
        <div class="card-body">
            <h5 class="card-header">Mon parcours</h5>
            <div class="input-group">

            </div>
        </div>
    </div>
    <!--Map-->
    <div class="card my-4">
        <div class="card-body">
            <h5 class="card-header">Où me trouver</h5>
            <div class="input-group">

            </div>
        </div>
    </div>
    <!--Contact-->
    <div class="card my-4">
        <div class="card-body">
            <h5 class="card-header">Me contacter</h5>
            <div class="input-group">

            </div>
        </div>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>