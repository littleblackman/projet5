<?php $title = 'Page de connexion à l\'administration'; ?>

<?php ob_start(); ?>
<div id="login">
    <h1>
        <!--Mettre une image ? -->
    </h1>
    <form name="loginform" id="loginform" action="console.php?action=admin" method="post">
            <p>
                <label for="user_login">
                    Identifiant <br>
                    <input type="text" name="log" id="user_login" class="input" value size="20">
                </label>
            </p>
            <p>
                <label for="user_pass">
                    Mot de passe <br>
                    <input type="password" name="pwd" id="user_pass" class="input" value size="20">
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
    </form>
</div>