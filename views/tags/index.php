<h1 class="tagGroup--title">Catégories</h1>
<div class="tagGroup">

    <?php foreach ($params['tags'] as $tag) : ?>

        <div class="tagCard">
            <h3 class="tagCard--title" style="border-color:<?= htmlspecialchars($tag->color) ?>"><?= htmlspecialchars($tag->name) ?></h3>
            <div class="tagCard--link">
                <a href="/tags/<?= htmlspecialchars($tag->id) ?>">
                    <?php if (isset($tag->thumbnail) && $tag->thumbnail != null) : ?>
                        <img src="<?= htmlspecialchars(IMAGES . "tags/" . $tag->thumbnail) ?>" alt="visuel catégorie <?= htmlspecialchars($tag->name) ?>">
                        <?php else : ?>
                            <img src="<?= htmlspecialchars(IMAGES . "placeholder.webp" . $tag->thumbnail) ?>" alt="Visuel non disponible">
                    <?php endif ?>
                </a>
            </div>
        </div>
    <?php endforeach ?>
</div>