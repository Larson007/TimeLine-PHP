<h1 class="timelines--title">Timelines</h1>
<!-- 
<form action="" class="search">
    <input id="search" name="search" type="text" placeholder="Type here">
    <input id="submit" type="submit" value="Search">
</form> -->

<div class="cards">

    <?php foreach ($params['timelines'] as $timeline) : ?>
        <div class="box">
            <div class="box-card">
                <div class="box-content">
                    <div class="box-image">
                        <?php if (isset($timeline->thumbnail) && !empty($timeline->thumbnail)) : ?>
                            <img src="<?= htmlspecialchars(IMAGES . "timelines/" . $timeline->thumbnail) ?>" alt="<?= htmlspecialchars($timeline->thumbnail_alt) ?>" width="380px" height="210px">
                        <?php else : ?>
                            <img src="<?= htmlspecialchars(IMAGES . "timelines/" . 'placeholder.webp') ?>" alt="Pas de visuel disponible" width="380px" height="210px">
                        <?php endif ?>
                        <span class="box-created">Ajouté le <?= htmlspecialchars($timeline->getCreatedAt()) ?></span>
                    </div>
                    <h2 class="timeline__content--title"><?= htmlspecialchars($timeline->title) ?></h2>
                </div>
                <div class="box-detail">
                    <div class="box-date">
                        <?= $timeline->getDateStart() ?>
                        <?= (isset($timeline->date_end) ? $timeline->getDateEnd() : '') ?>
                    </div>
                    <p><?= htmlspecialchars($timeline->getExcerpt()) ?></p>
                    <div class="badges">
                        <?php foreach ($timeline->getTags() as $tags) : ?>
                            <div class="badges--items" style="background-color:<?= htmlspecialchars($tags->color) ?>">
                                <a href="/tags/<?= htmlspecialchars($tags->tag_id) ?>"><?= htmlspecialchars($tags->name) ?></a>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <div class="box-link">
                        <div class="link">
                            <?= ($timeline->getButton()) ?>
                        </div>
                    </div>
                </div>
                <div class="box-toggle">
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>