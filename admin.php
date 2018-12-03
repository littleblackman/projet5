<?php $title = 'Page de connexion à l\'administration'; ?>

<?php ob_start(); ?>

<div class="row" id="adminCards">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card my-4">
                        <div class="card-body">
                    <div id="login">
                        <h1>
                            <!--Mettre une image ? -->
                        </h1>
                        <form action="console.php?action=admin" method="post">

                            <div class="form-group">
                                <p>
                                    <label for ="pseudo">Identifiant <br>
                                        <input class="form-control" type="text" id="pseudo" name="userPseudo" />
                                    </label>
                                </p>

                            </div>
                            <div class="form-group">
                                <p>
                                    <label for ="userPass">
                                        Mot de passe <br>
                                        <input class="form-control" type="password" name="userPass"/>
                                    </label>
                                </p>

                                <div>
                                    <button type="submit" class="btn btn-primary">Se connecter</button>
                                </div>
                        </form>
                    </div>
                        </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>


<?php require('App/View/frontend/template.php'); ?>

