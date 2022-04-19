<?php

$faker = Faker\Factory::create();
?>

<div class="container">
    <h1>Creation d'une TimeLine</h1>

    <form action="/timeline/create" method="POST" class="form">

        <div class="form__group--left">
            <div class="form__group__items">
                <label for="title">Titre</label>
                <input class="form__group__items--input" type="text" name="title" id="title">
            </div>
            <div class="form__group__date">
                <div class="form__group__date__items">
                    <label for="date_start">date-start</label>
                    <input class="form__group__items--input" type="text" name="date_start" id="date_start">
                </div>
                <div class="form__group__date__items">
                    <label for="date_end">date-end</label>
                    <input class="form__group__items--input" type="text" name="date_end" id="date_end">
                </div>
            </div>
            <div class="form__group__items">
                <label for="description">description</label>
                <textarea class="form__group__items--input" name="description" id="description" rows="8"><?= $faker->realText($maxNbChars = 400, $indexSize = 2) ?></textarea>
            </div>
        </div>
        <div class="form__group--right">
            <div class="form__group__image">
                <div class="form__group__image--file">
                    <p>Thumbnail</p>
                    <input class="form__group__items--input" type="file" name="thumbnail" id="thumbnail" value="ww2.jpg">
                    <label for="thumbnail"><i class="fa-solid fa-upload"></i>Choisir un fichier</label>
                </div>
                <div class="form__group__image--preview">
                    <img id="preview" src="#" alt="aperçu de l'image uploader" />
                </div>
            </div>
            <input type="hidden" name="thumbnail_alt" id="thumbnail_alt">
            <input type="hidden" name="user_id" id="user_id">
            <div class="form__group__tags">
                <p class="form__group__tags--title">Catégories</p>
                <div class="form__group__tags--checkbox">
                    <?php foreach ($params['tags'] as $tag) : ?>
                        <div class="form__group__tags--checkbox--item">
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