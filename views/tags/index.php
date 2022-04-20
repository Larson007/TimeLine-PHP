

<div class="container">

    <h1>Index du TagsController</h1>
    <h1>Catégories</h1>
    <div class="tagGroup">

        <?php foreach ($params['tags'] as $tag) : ?>

            <div class="tagCard">
                <div class="tagCard__content">
                    <div class="tagCardtagCard__content--image">
                        <?php if (isset($tag->thumbnail) && $tag->thumbnail != null) : ?>
                            <img src="<?= IMAGES ."tags/". $tag->thumbnail ?>" alt="">
                        <?php endif ?>
                    </div>
                    <h3 class="tagCard__content--title"><?= $tag->name ?></h3>
                    <div class="tagCard__content__link">
                        <?= $tag->getButton() ?>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>