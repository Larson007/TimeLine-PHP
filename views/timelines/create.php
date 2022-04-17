<?php

$faker = Faker\Factory::create();
?>

<div class="container">
    <h1>Create TimeLine View</h1>

    <form action="/timeline/create" method="POST" class="form">

        <div class="form__group--left">
            <div class="form__group__items">
                <label for="title">Titre</label>
                <input class="form__group__items--input" type="text" name="title" id="title" value="<?= $faker->name(); ?>">
            </div>
            <div class="form__group__items">
                <label for="thumbnail">thumbnail</label>
                <input class="form__group__items--input" type="file" name="thumbnail" id="thumbnail" value="ww2.jpg">
            </div>
            <div class="form__group__items">
                <label for="thumbnail_alt">thumbnail_alt</label>
                <input class="form__group__items--input" type="text" name="thumbnail_alt" id="thumbnail_alt" value="descr img">
            </div>
        </div>
        <div class="form__group--right">
            <div class="form__group__items">
                <label for="description">description</label>
                <textarea class="form__group__items--input" name="description" id="description" rows="8"><?= $faker->realText($maxNbChars = 400, $indexSize = 2) ?></textarea>
            </div>
            <div class="form__group__items">
                <label for="date_start">date-start</label>
                <input class="form__group__items--input" type="text" name="date_start" id="date_start">
            </div>
            <div class="form__group__items">
                <label for="date_end">date-end</label>
                <input class="form__group__items--input" type="text" name="date_end" id="date_end">
            </div>
            <div class="form__group__items">
                <label for="user_id">user</label>
                <input class="form__group__items--input" type="text" name="user_id" id="user_id" value="1">
            </div>
            <div>
                <?php foreach ($params['tags'] as $tag) : ?>
                    <input type="checkbox" name="tags[]" id="tags" value="<?= $tag->id ?>">
                    <label for="tags"><?= $tag->name ?></label>
                <?php endforeach ?>
            </div>
        </div>
        <button type="submit" class="">Enregistrer</button>
    </form>
</div>