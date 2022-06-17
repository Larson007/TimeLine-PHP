<?php

use App\Models\Timelines;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= htmlspecialchars(SCRIPTS . 'assets' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'app.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" integrity="sha512-oe8OpYjBaDWPt2VmSFR+qYOdnTjeV9QPLJUeqZyprDEQvQLJ9C5PCFclxwNuvb/GQgQngdCXzKSFltuHD3eCxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css">
    <link rel="icon" type="image/png" href="<?= htmlspecialchars(IMAGES . 'favicon' . DIRECTORY_SEPARATOR . 'favicon-32x32.png') ?>" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?= htmlspecialchars(IMAGES . 'favicon' . DIRECTORY_SEPARATOR . 'favicon-16x16.png') ?>" sizes="16x16" />
    <title><?= $params['timeline']->title ?? "Timelines" ?></title>
    <meta name="description" content="<?= $params['timeline']->description ?? "Bienvenu sur le site ..." ?>">
</head>

<body>
    <header id="header">
        <div id="burger-menu">
            <span></span>
        </div>
        <a class="logo" href="/">
            <img class="logo--image" src="<?= htmlspecialchars(IMAGES . 'logo.svg') ?>" alt="logo timeline">
        </a>
        <nav id="navbar">
            <ul class="navbar__menu">
                <li class="navbar__menu__item">
                    <a class="navbar__menu__item--link" href="/">Accueil</a>
                </li>
                <li class="navbar__menu__item">
                    <a class="navbar__menu__item--link" href="/timelines">Timelines</a>
                </li>
                <li class="navbar__menu__item">
                    <a class="navbar__menu__item--link" href="/tags">Catégories</a>
                </li>
                <?php if (isset($_SESSION['auth'])) : ?>
                    <li class="navbar__menu__item">
                        <p class="navbar__menu__item--link"><?= htmlspecialchars($_SESSION['username']) ?></p>
                        <ul class="dropdown">
                            <?php if ($_SESSION['auth'] === 1) : ?>
                                <li class="dropdown__item">
                                    <i class="fa-solid fa-chart-line"></i>
                                    <a href="/admin/dashboard">Dashboard</a>
                                </li>
                                <li class="dropdown__item">
                                    <i class="fa-solid fa-timeline"></i>
                                    <a href="/admin/timelines">timelines</a>
                                </li>
                                <li class="dropdown__item">
                                    <i class="fa-solid fa-tags"></i>
                                    <a href="/admin/tags">catégories</a>
                                </li>
                            <?php elseif ($_SESSION['auth'] === 0) : ?>
                                <li class="dropdown__item">
                                    <i class="fa-solid fa-user"></i>
                                    <a href="/account/<?= htmlspecialchars($_SESSION['id']) ?>">Mon compte</a>
                                </li>
                            <?php endif ?>
                            <li class="dropdown__item">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                <a href="/logout">Déconnexion</a>
                            </li>
                        </ul>
                    </li>

                <?php endif ?>
                <?php if (!isset($_SESSION['auth']) && empty($_SESSION['auth'])) :  ?>
                    <li class="navbar__menu__item">
                        <a class="navbar__menu__item--link" href="/login">Connexion</a>
                    </li>
                    <li class="navbar__menu__item">
                        <a class="navbar__menu__item--link" href="/register">Inscription</a>
                    </li>
                <?php endif ?>
            </ul>
        </nav>
    </header>
    <main>
        <div id="containers" class="containers">
            <?= $content ?>
        </div>
    </main>
    
    <script src="<?= htmlspecialchars(SCRIPTS . 'assets' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'jquery-3.6.0.min.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="<?= htmlspecialchars(SCRIPTS . 'assets' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'three.min.js') ?>"></script>
    <script src="<?= htmlspecialchars(SCRIPTS . 'assets' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'vanta.globe.min.js') ?>"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/prism.min.js"></script>

    <script src="<?= htmlspecialchars(SCRIPTS . 'assets' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'pageable.js') ?>"></script>
    <script type="module" src="<?= htmlspecialchars(SCRIPTS . 'assets' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'scripts.js') ?>"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>