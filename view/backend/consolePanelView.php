<?php $title = 'Page d\'administration'; ?>

<?php ob_start(); ?>

    <div class="row" id="adminCards">
        <div class="col-lg-6">
            <!-- Gestion des projets-->
            <div class="card my-4">
                <div class="card-body">
                    <h5 class="card-header">Gestion des Projets</h5>
                    <div class="input-group">
                        <ul>
                            <li><a href="console.php?action=addProject">Ajout d'un projet</a></li>
                            <li><a href="console.php?action=manageProject">Editer / supprimer un projet</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gestion des expériences-->
        <div class="card my-4">
            <div class="card-body">
                <h5 class="card-header">Gestion des Expériences</h5>
                <div class="input-group">
                    <ul>
                        <li><a href="console.php?action=addJob">Ajout d'une expérience</a></li>
                        <li><a href="console.php?action=manageJobs">Editer / supprimer une expérience</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Gestion des formations-->
        <div class="card my-4">
            <div class="card-body">
                <h5 class="card-header">Gestion des Formations</h5>
                <div class="input-group">
                    <ul>
                        <li><a href="console.php?action=addFormation">Ajout d'une formation</a></li>
                        <li><a href="console.php?action=manageFormations">Editer / supprimer une formation</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Gestion des compétences-->
        <div class="card my-4">
            <div class="card-body">
                <h5 class="card-header">Gestion des Compétences</h5>
                <div class="input-group">
                    <ul>
                        <li><a href="console.php?action=addSkill">Ajout d'une compétence</a></li>
                        <li><a href="console.php?action=manageSkills">Editer / supprimer une compétence</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

<?php $content = ob_get_clean(); ?>

<?php require('view/backend/template.php'); ?>