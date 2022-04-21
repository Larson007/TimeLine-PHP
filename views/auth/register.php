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
<div class="container">

<h1>Inscription</h1>

<form action="/register" method="POST">
    <div class="form-group mb-3">
        <label for="username">Nom d'utilisateur</label>
        <input class="form-control" type="text" name="username" id="username">
    </div>
    <div class="form-group mb-3">
        <label for="email">email</label>
        <input class="form-control" type="text" name="email" id="email">
    </div>
    <div class="form-group mb-3">
        <label for="password">Mot de passe</label>
        <input class="form-control" type="password" name="password" id="password">
    </div>
    <button type="submit" class="btn btn-primary">s'inscrire</button>
</form>
</div>