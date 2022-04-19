<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= SCRIPTS . 'assets' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'normalize.css' ?>">
    <link rel="stylesheet" href="<?= SCRIPTS . 'assets' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'app.css' ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>TimeLine</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <a class="navbar__logo" href="/">
                <img class="navbar__logo--image" src="<?= IMAGES . 'logo.svg' ?>" alt="logo timeline">
            </a>
            <ul class="navbar__menu">
                <li class="navbar__menu--item">
                    <a href="/">Accueil</a>
                </li>
                <li class="navbar__menu--item">
                    <a href="/timelines">Timelines</a>
                    <ul class="navbar__menu__dropdown">
                        <li class="nav__menu__dropdown--item">
                            <a href="/timeline/create">Create Timeline</a>
                        </li>
                    </ul>
                </li>
                <li class="navbar__menu--item">
                    <a href="/tags">Catégories</a>
                    <ul class="navbar__menu__dropdown">
                        <li class="nav__menu__dropdown--item">
                            <a href="/tag/create">Create Tag</a>
                        </li>
                    </ul>
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