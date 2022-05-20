<h1 class="tagGroup--title">Catégories</h1>
<div class="tagGroup">

    <?php foreach ($params['tags'] as $tag) : ?>

        <div class="tagCard">
            <h3 class="tagCard--title"><?= $tag->name ?></h3>
            <div class="tagCard--link">
                <a href="/tags/<?= $tag->id ?>">
                    <?php if (isset($tag->thumbnail) && $tag->thumbnail != null) : ?>
                        <img src="<?= IMAGES . "tags/" . $tag->thumbnail ?>" alt="" width="380px" height="210px">
                    <?php endif ?>
                </a>
            </div>
        </div>
    <?php endforeach ?>
</div>