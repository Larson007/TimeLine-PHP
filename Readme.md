# Projet 3WA - Timelines

![Timelines](public/assets/images/logo.svg "logo Timelines")

## Sommaire

1. Structure
2. Dépendances
3. Ressources

## 1. Structure

````md
.
│
├── public/
│    ├── index.php                  # Fichiers principale de l'application qui gère les routes et le rendu
│    └── assets/                    # Dossier contenant les ressources Css/Js/images
│        ├── css/                   # Dossier contenant les feuilles de styles
│        │    ├── app.scss          # Fichier Scss
│        │    ├── app.css           # Fichier Css générer à partir du Scss
│        │    └── _partial.scss     # Fichier Css partionner exporter vers app.scss
│        ├── js/
│        │    ├── libs/             # Dossier contenant les scripts spécifiques exporté vers scripts.js
│        │    └── scripts.js        # Fichier contenant les scripts js principaux
│        └── images/                # Dossier contenant les ressources images/SVG/logo...
│             ├── small/            # Images adapatatives aux mobiles
│             ├── medium/           # Images adapatatives aux tablettes
│             └── large/            # Images adapatativse aux desktops
│
├── app/                            # Contiens les dossiers du MV
│    ├── Controllers/               # Fais le lien entre les models et le view
│    ├── Models/                    # Contiens les requêtes vers ma BDD
│    ├── Exceptions/                # Fichiers pour la gestions des erreur PHP
│    └── Validation/                # Fichiers de validation des formulaires PHP
│
├── routes/                         # contiens les fichiers du sytème de routes
│    ├── Route.php                  # Configuration des routes
│    └── Router.php                 # Construction des routes
│
├── view/                           # Contiens les views du MVC
│    ├── admin/                     # Le template des pages administrateur
│    ├── errors/                    # le template des pages d'erreur
│    ├── pages/                     # le template des pages du site
│    └── layout.phtml               # contiens le rendu dynamique du site (header/footer)
│
├── database/                       # Structure de la DB
│    ├── DBConnection               # Fichier de configruration à la Database
│    └── db.sql                     # Fichier sql sans data
│
├── vendor/                         # Dossier d'installation des composents de composer
│    ├── composer/                  # Contiens les différentes librairies intallé via composer
│    │    └── ...
│    └── autoload.php               # Le fichier générer par composer qui gére l'autoload
│
├── .htaccess                       # Fichiers de configuration du serveurs HTTP Apache
├── composer.json                   # Fichier de configuration de composer
└── Readme.md                       # Description du projet
````

&nbsp;

---

&nbsp;

## 2. Dépendances

### Autoload

Initialisation de composer

````bash
composer init
````

Configuration du fichier générer composer.json

````json
{
    "name": "mohamed/projet3wa",
    "description": "Projet de fin de formation Dev Web/mobile 3wa 2022",
    "autoload": {
        "psr-4": {
            "App\\": "src/" // Renomme le namespace en "APP\\"
        }
    },
    "authors": [
        {
            "name": "Larson007",
            "email": "mohamed.benallal.pro@gmail.com"
        }
    ],
    "require": {}
}
````

Mettre à jour l'autoload

````bash
composer dump-autoload
````

### Symfony dump

Lien :
> <https://packagist.org/packages/symfony/var-dumper>

````bash
composer require symfony/var-dumper
````

### Toastr

Lien :
> <https://github.com/CodeSeven/toastr>

````bash
npm install --save toastr
````

Demo :
> <https://codeseven.github.io/toastr/demo.html>

&nbsp;

---

&nbsp;

## 3. Ressources

### Fonts

> [Bebas Neue](https://fonts.google.com/specimen/Bebas+Neue?query=bebas#standard-styles)
>
> [Roboto Condensed](https://fonts.google.com/specimen/Roboto+Condensed?query=roboto+conden)

TODO Comportement pageable lors du click sur une slide qui passe en plein ecran et supprime la bar de tâche
