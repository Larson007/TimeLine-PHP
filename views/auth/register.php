<?php session_destroy(); ?>


<div class="register">

    <h1 class="register--title">Inscription</h1>

    <div class="register__link">
        <a href="/login" class="register__link--login">Connexion</a>
        <span></span>
        <a href="/register" class="register__link--register">Inscription</a>
    </div>

    <form action="/register" method="POST" class="register__form">
        <div class="register__form--item">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" autofocus>
        </div>
        <div class="register__form--item">
            <label for="email">email</label>
            <input type="text" name="email" id="email">
        </div>
        <div class="register__form--item">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit" class="register__form--submit">s'inscrire</button>
    </form>
    <div>
        <?php if (isset($_SESSION['errors'])) : ?>

            <?php foreach ($_SESSION['errors'] as $errorsArray) : ?>
                <?php foreach ($errorsArray as $errors) : ?>
                    <div class="alert alert-danger">
                        <?php foreach ($errors as $error) : ?>
                            <li><?= htmlspecialchars($error) ?></li>
                        <?php endforeach ?>
                    </div>
                <?php endforeach ?>
            <?php endforeach ?>
        <?php endif ?>
    </div>
</div>