<?php
$faker = Faker\Factory::create();
?>

<div class="event">
    <h1 class="event--title"><?= $params['timeline']->title ?> : Creation d'un événement</h1>

    <nav aria-label="Breadcrumb" class="event__ariane">
        <p>Selectionner une date pour editer l'évènement</p>
        <ul>
            <li><a href=""><?= $params['timeline']->date_start ?> <span><?= ($params['timeline']->date_start_bc === 1) ? "av. J.C." : "" ?></span></a><i class="fa-solid fa-circle-chevron-right"></i></li>
            <?php foreach ($params['events'] as $event) : ?>
                <li><a href="/events/edit/<?= $event->id ?>"><?= $event->year ?><span><?= ($event->date_bc === 1) ? " av. J.C. : " : " : " ?></span><?= $event->title ?></a><i class="fa-solid fa-circle-chevron-right"></i></li>
            <?php endforeach ?>
        </ul>
    </nav>

    <form method="POST" enctype="multipart/form-data" class="event__form">

        <div class="event__form__content">
            <div class="event__form__content--item">
                <label for="title">Titre de l'évènement</label>
                <input type="text" name="title" id="title">
            </div>
            <div class="date">
                <p class="date--title">Date <span>(Mois et jour optionnel)</span></p>
                <div class="date__group">
                    <div class="date__group__item">
                        <label for="year">Année</label>
                        <input type="text" name="year" id="year">
                    </div>
                    <div class="date__group__item date__short">
                        <label for="month">Mois</label>
                        <input type="text" name="month" id="month">
                    </div>
                    <div class="date__group__item date__short">
                        <label for="day">jour</label>
                        <input type="text" name="day" id="day">
                    </div>
                    <div class="date__group__item date--bc">
                        <label for="date_bc">avant J.c.</label>
                        <input type="hidden" name="date_bc" id="date_bc" value="0">
                        <input type="checkbox" name="date_bc" id="date_bc" value="1">
                    </div>
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
        <button type="submit" class="event__submit--create event--btn">Enregistrer</button>
    </form>
</div>