<?php
$faker = Faker\Factory::create();
// dump($params['timeline']);
// dump($params['events']);
?>

<div class="container">
    <h1><?= $params['timeline']->title ?> - Creation d'un événement</h1>

    <nav aria-label="Breadcrumb" class="ariane">
        <ul>
            <li class="test"><a href=""><?= $params['timeline']->date_start ?></a></li>
            <?php foreach ($params['events'] as $event) : ?>
                <?php if ($event->timeline_id === $params['timeline']->id): ?>
                    <li><a href="/events/edit/<?= $event->id ?>"><?= $event->date_start ?></a></li>
                    <?php endif?>
            <?php endforeach ?>
        </ul>
    </nav>

    <form method="POST" class="form" enctype="multipart/form-data">

        <div class="form__group--left">
            <div class="form__group__items">
                <label for="title">Titre de l'évènement</label>
                <input class="form__group__items--input" type="text" name="title" id="title">
            </div>
            <div class="form__group__date">
                <div class="form__group__date__items">
                    <label for="date_start">Date de début</label>
                    <input class="form__group__items--input" type="text" name="date_start" id="date_start">
                </div>
                <div class="form__group__date__items">
                    <label for="date_end">Date de fin (optionnel)</label>
                    <input class="form__group__items--input" type="text" name="date_end" id="date_end">
                </div>
            </div>
            <div class="form__group__items">
                <label for="text">description</label>
                <textarea class="form__group__items--input" name="text" id="text" rows="8"><?= $faker->realText($maxNbChars = 400, $indexSize = 2) ?></textarea>
            </div>
        </div>
        <div class="form__group--right">
            <div class="form__group__image">
                <div class="form__group__image--file">
                    <p>Média</p>
                    <input class="form__group__items--input" type="file" name="thumbnail_file" id="thumbnail_file">
                    <label for="thumbnail_file"><i class="fa-solid fa-upload"></i>Choisir un fichier</label>
                </div>
                <div class="form__group__image--preview">
                    <img id="preview" src="#" alt="aperçu de l'image uploader" />
                </div>
            </div>
            <input type="hidden" name="thumbnail" id="thumbnail">
            <input type="hidden" name="thumbnail_alt" id="thumbnail_alt">
            <input type="hidden" name="timeline_id" id="timeline_id" value="<?= $params['timeline']->id ?>">
        </div>
        <button type="submit" class="">Enregistrer</button>
    </form>
</div>