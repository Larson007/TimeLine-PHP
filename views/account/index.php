<?php dump($_SESSION) ?>
<?php dump($params['user']) ?>

<h1>Mon compte</h1>

<form method="post">
    <div>
        <label for="username">Pseudo</label>
        <input type="text" name="username" id="username" value="<?= $params['user']->username ?>">
    </div>
    <div>
        <label for="email">email</label>
        <input type="text" name="email" id="email" value="<?= $params['user']->email ?>">
    </div>

</form>