<?php $title = 'Page de connexion à l\'administration'; ?>

<?php ob_start(); ?>
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

