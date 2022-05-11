<?php
$faker = Faker\Factory::create();
?>

<div class="event">
    <h1 class="event--title"><?= $params['timeline']->title ?> : Creation d'un événement</h1>

    <nav aria-label="Breadcrumb" class="event__ariane">
        <p>Selectionner une date pour editer l'évènement</p>
        <ul>
            <li><a href=""><?= $params['timeline']->date_start ?></a><i class="fa-solid fa-circle-chevron-right"></i></li>
            <?php foreach ($params['events'] as $event) : ?>
                    <li><a href="/events/edit/<?= $event->id ?>"><?= $event->date_start ?></a><i class="fa-solid fa-circle-chevron-right"></i></li>
            <?php endforeach ?>
        </ul>
    </nav>

    <form method="POST" enctype="multipart/form-data" class="event__form">

        <div class="event__form__content">
            <div class="event__form__content--item">
                <label for="title">Titre de l'évènement</label>
                <input type="text" name="title" id="title">
            </div>
            <div class="event__form__content--date">
                <div class="date__group date__group--start">
                    <label for="date_start">Date de début</label>
                    <input type="text" name="date_start" id="date_start">
                </div>
                <div class="date__group date__group--end">
                    <label for="date_end">Date de fin <span>(optionnel)</span></label>
                    <input type="text" name="date_end" id="date_end">
                </div>
            </div>
            <div class="event__form__content--item">
                <label for="text">description</label>
                <textarea name="text" id="text" rows="8"><?= $faker->realText($maxNbChars = 400, $indexSize = 2) ?></textarea>
            </div>
        </div>
        <div class="event__form__detail">
            <div class="event__form__detail__thumbnail">
                <div class="thumbnail__file">
                    <p>Média</p>
                    <input type="file" name="thumbnail_file" id="thumbnail_file" hidden>
                    <label for="thumbnail_file"><i class="fa-solid fa-upload"></i>Choisir un fichier <span>(max 2mo)</span></label>
                </div>
                <div class="thumbnail__preview">
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