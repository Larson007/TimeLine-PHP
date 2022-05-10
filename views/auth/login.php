<?php session_destroy(); ?>


<div class="login">
    <h1 class="login--title">Connexion</h1>

    <div class="login__link">
        <a href="/login" class="login__link--login">Connexion</a>
        <span></span>
        <a href="/register" class="login__link--register">Inscription</a>
    </div>

    <form action="/login" method="POST" class="login__form" autocomplete="off">
        <div class="login__form--item">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username">
        </div>
        <div class="login__form--item">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit" class="login__form--submit">Se connecter</button>
    </form>
    <div class="login__messages">
        <div class="login__messages--success">
            <?php if (isset($_GET['register']) && $_GET['register'] === 'true') : ?>
                <div>
                    <p>Votre Compte à été créer avec succès ! Veuillez vous connecter</p>
                </div>
            <?php endif ?>
        </div>
        <?php if (isset($_GET['message']) && $_GET['message'] === 'true') : ?>
            <div class="login__messages--error">
                <p>Cette utilisateur n'existe pas</p>
            </div>
        <?php endif ?>
        <?php if (isset($_SESSION['errors'])) : ?>
            <?php foreach ($_SESSION['errors'] as $errorsArray) : ?>
                <?php foreach ($errorsArray as $errors) : ?>
                    <div class="login__error--message">
                        <?php foreach ($errors as $error) : ?>
                            <p><?= htmlspecialchars($error) ?></p>
                        <?php endforeach ?>
                    </div>
                <?php endforeach ?>
            <?php endforeach ?>
        <?php endif ?>

    </div>
</div>