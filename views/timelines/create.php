<?php

$faker = Faker\Factory::create();
?>

<div class="timeline__create">
    <h1 class="timeline__create--title">Creation d'une TimeLine</h1>

    <nav aria-label="Breadcrumb" class="timeline__create__ariane">
        <ul>
            <li><span aria-current="page">Timeline</span></li>
        </ul>
    </nav>

    <form action="/timeline/create" method="POST" class="timeline__create__form" enctype="multipart/form-data">

        <div class="timeline__create__form__content">
            <div class="timeline__create__form__content--item">
                <label for="title">Titre</label>
                <input type="text" name="title" id="title">
            </div>
            <div class="timeline__create__form__content--date">
                <div class="date__group date__group--start">
                    <label for="date_start">Date de début</label>
                    <input type="text" name="date_start" id="date_start">
                </div>
                <div class="date__group">
                    <label for="date_end">Date de fin <span>(optionnel)</span></label>
                    <input type="text" name="date_end" id="date_end">
                </div>
            </div>
            <div class="timeline__create__form__content--item">
                <label for="description">description</label>
                <textarea name="description" id="description" rows="8"><?= $faker->realText($maxNbChars = 400, $indexSize = 2) ?></textarea>
            </div>
        </div>
        <div class="timeline__create__form__detail">
            <div class="timeline__create__form__detail__thumbnail">
                <div class="thumbnail__file">
                    <p>Thumbnail</p>
                    <input type="file" name="thumbnail_file" id="thumbnail_file" hidden>
                    <label for="thumbnail_file"><i class="fa-solid fa-upload"></i> Choisir un fichier</label>
                </div>
                <div class="thumbnail__preview">
                    <img id="preview" src="#" alt="aperçu de l'image uploader" />
                </div>
            </div>
            <input type="hidden" name="thumbnail" id="thumbnail">
            <input type="hidden" name="thumbnail_alt" id="thumbnail_alt">
            <input type="hidden" name="user_id" id="user_id">
            <div class="timeline__create__form__detail__tags">
                <p>Catégories</p>
                <div class="tags__group">
                    <?php foreach ($params['tags'] as $tag) : ?>
                        <div class="tags__group--item">
                            <input class="check" type="checkbox" name="tags[]" id=<?= $tag->id ?> value="<?= $tag->id ?>">
                            <label for=<?= $tag->id ?>><?= $tag->name ?></label>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <button type="submit" class="">Enregistrer</button>
    </form>
</div>