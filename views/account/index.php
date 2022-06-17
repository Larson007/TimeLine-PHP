<h1>Mon compte</h1>

<form method="post">
    <div>
        <label for="username">Pseudo</label>
        <input type="text" name="username" id="username" value="<?= htmlspecialchars($params['user']->username) ?>">
    </div>
    <div>
        <label for="email">email</label>
        <input type="text" name="email" id="email" value="<?= htmlspecialchars($params['user']->email) ?>">
    </div>

</form>