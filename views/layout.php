<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= SCRIPTS . 'assets' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'normalize.css' ?>">
    <link rel="stylesheet" href="<?= SCRIPTS . 'assets' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'app.css' ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" integrity="sha512-oe8OpYjBaDWPt2VmSFR+qYOdnTjeV9QPLJUeqZyprDEQvQLJ9C5PCFclxwNuvb/GQgQngdCXzKSFltuHD3eCxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                </li>
                <li class="navbar__menu--item">
                    <a href="/tags">Catégories</a>
                </li>
                <?php if (isset($_SESSION['auth'])) : ?>
                    <li class="navbar__menu--item">
                        <a href=""><?= $_SESSION['username'] ?></a>
                        <ul class="navbar__menu__dropdown">
                            <?php if ($_SESSION['auth'] === 1) : ?>
                                <li>
                                    <a href="/admin/dashboard">Dashboard</a>
                                </li>
                                <li>
                                    <a href="/admin/timelines">timelines</a>
                                </li>
                                <li>
                                    <a href="/admin/tags">catégories</a>
                                </li>
                            <?php endif ?>
                            <li><a href="/logout">Se deconnecter</a></li>
                        </ul>
                    </li>

                <?php endif ?>
                <?php if (!isset($_SESSION['auth']) && empty($_SESSION['auth'])) :  ?>
                    <li>
                        <a href="/login">Connexion</a>
                    </li>
                    <li>
                        <a href="/register">Inscription</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>