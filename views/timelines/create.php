<?php

$faker = Faker\Factory::create();
?>

<div class="container">
    <h1>Create TimeLine View</h1>


<form action="" class="form">
    <div class="form__group left">
        <div class="form__group--items">
            <label for="test">test</label>
            <input type="text">
        </div>
        <div class="form__group--items">
            <label for="test">test</label>
            <input type="text">
        </div>
        <div class="form__group--items">
            <label for="test">test</label>
            <input type="text">
        </div>
    </div>
    <div class="form__group right">
        <div class="form__group--items">
            <label for="test">test</label>
            <input type="text">
        </div>
        <div class="form__group--items">
            <label for="test">test</label>
            <input type="text">
        </div>
        <div class="form__group--items">
            <label for="test">test</label>
            <input type="text">
        </div>
    </div>
</form>

    <!-- <form action="/timeline/create" method="POST" class="form">
        <div class="form__group">
            <div class="form__group--items">
                <label for="title">Titre</label>
                <input class="" type="text" name="title" id="title" value="<?= $faker->name(); ?>">
            </div>
            <div class="">
                <label for="thumbnail">thumbnail</label>
                <input class="" type="text" name="thumbnail" id="thumbnail" value="ww2.jpg">
            </div>
            <div class="">
                <label for="thumbnail_alt">thumbnail_alt</label>
                <input class="" type="text" name="thumbnail_alt" id="thumbnail_alt" value="descr img">
            </div>
        </div>
        <div class="form__group">
            <div class="">
                <label for="description">description</label>
                <textarea class="" name="description" id="description" rows="8"><?= $faker->realText($maxNbChars = 400, $indexSize = 2) ?></textarea>
            </div>
            <div class="">
                <label for="date_start">date-start</label>
                <input class="" type="date" name="date_start" id="date_start" value="2022-04-12 18:14:00">
            </div>
            <div class="">
                <label for="user_id">user</label>
                <input class="" type="text" name="user_id" id="user_id" value="1">
            </div>
            <div>
                <?php foreach ($params['tags'] as $tag) : ?>
                    <input type="checkbox" name="tags[]" id="tags">
                    <label for="tags"><?= $tag->name ?></label>
                <?php endforeach ?>
            </div>
        </div>
        <button type="submit" class="">Enregistrer</button>
    </form> -->
</div>