<div class="container">

    <h1>Index du TagsController</h1>
    <h1>Catégories</h1>
    <div class="tagGroup">

        <?php foreach ($params['tags'] as $tag) : ?>

            <div class="tagCard">
                <div class="tagCard__image">
                    <?php if (isset($tag->thumbnail) && $tag->thumbnail != null) : ?>
                    <img src="<?=IMAGES . $tag->thumbnail ?>" alt="">
                    <?php endif ?>
                </div>
                <div class="tagCard__content">
                    <h2 class="tagCard__content--title"><?= $tag->name ?></h2>
                    <?= $tag->getButton() ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
