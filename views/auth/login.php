<?php if (isset($_SESSION['errors'])) : ?>

    <?php foreach ($_SESSION['errors'] as $errorsArray) : ?>
        <?php foreach ($errorsArray as $errors) : ?>
            <div class="alert alert-danger">
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach ?>
            </div>
        <?php endforeach ?>
    <?php endforeach ?>
<?php endif ?>
<?php session_destroy(); ?>
<h1>Connexion</h1>

<form action="/login" method="POST">
    <div class="form-group mb-3">
        <label for="username">Nom d'utilisateur</label>
        <input class="form-control" type="text" name="username" id="username">
    </div>
    <div class="form-group mb-3">
        <label for="password">Mot de passe</label>
        <input class="form-control" type="password" name="password" id="password">
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
</form>