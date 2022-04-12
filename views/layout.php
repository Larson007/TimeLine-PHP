<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= SCRIPTS . 'assets' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'normalize.css' ?>">
    <link rel="stylesheet" href="<?= SCRIPTS . 'assets' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'app.css' ?>">
    <title>TimeLine</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <a href="/">
                <img src="<?= IMAGES . 'logo.svg' ?>" alt="logo timeline">
            </a>
            </img>
            <ul>
                <li>
                    <a href="/">Accueil</a>
                </li>
                <li>
                    <a href="/timelines">Timelines</a>
                </li>
                <li>
                    <a href="/tags">Catégories</a>
                </li>
                <?php if (isset($_SESSION['auth']) && $_SESSION['auth'] === 1) : ?>
                    <li>
                        <a href="#">Admin</a>
                    </li>
                <?php endif ?>
                <?php if (isset($_SESSION['auth'])) : ?>
                    <li>
                        <a href="/logout">Se deconnecter</a>
                    </li>
                <?php endif ?>
            </ul>
        </nav>
    </header>
    <main>

        <div>
            <?= $content ?>
        </div>
    </main>
    <script src="<?= SCRIPTS . 'assets' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'three.min.js' ?>"></script>
    <script src="<?= SCRIPTS . 'assets' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'vanta.globe.min.js' ?>"></script>
    <script type="module" src="<?= SCRIPTS . 'assets' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'scripts.js' ?>"></script>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>