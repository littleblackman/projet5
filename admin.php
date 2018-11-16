<?php $title = 'Page de connexion à l\'administration'; ?>

<?php ob_start(); ?>
<div id="login">
    <h1>
        <!--Mettre une image ? -->
    </h1>
    <form action="console.php?action=admin" method="post">
        <div class="form-group">
            <label>Pseudo</label>
            <input class="form-control" type="text" id="pseudo" name="userPseudo" />
        </div>
        <div class="form-group">
            <label>Mot de passe</label>
            <input class="form-control" type="password" name="userPass"/>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </div>
    </form>

    <!-- <form name="loginform" id="loginform" action="console.php?action=admin" method="post">
            <p>
                <label for="userPseudo">
                    Identifiant <br>
                    <input type="text" name="userPseudo" id="userPseudo" class="input" value size="50">
                </label>
            </p>
            <p>
                <label for="userPass">
                    Mot de passe <br>
                    <input type="password" name="userPass" id="userPass" class="input" value size="50">
                </label>
            </p>
            <p class="forgetnot">
                <label for="rememberme">
                    <input name="rembemberme" type="checkbox" id="rememberme" value="forever">
                    Se souvenir de moi
                </label>
            </p>
            <p class="submit">
                <input type="submit" name="submit" class="button button-primary button large" value="Se connecter">
            </p>
            <p id="backtoblog">
                <a href="App/index.php">Retour vers l'accueil</a>
            </p>
    </form>-->
</div>