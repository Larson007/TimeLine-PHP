<h1 class="timelines--title">Timelines</h1>
<div class="cards">

    <?php foreach ($params['timelines'] as $timeline) : ?>
        <div class="box">
            <div class="box-card">
                <div class="box-content">
                    <div class="box-image">
                        <?php if (isset($timeline->thumbnail) && !empty($timeline->thumbnail)) : ?>
                            <img src="<?= IMAGES . "timelines/" . $timeline->thumbnail ?>" alt="<?= $timeline->thumbnail_alt ?>" width="380px" height="210px">
                        <?php else : ?>
                            <img src="<?= IMAGES . "timelines/" . 'placeholder.webp' ?>" alt="Pas de visuel disponible" width="380px" height="210px">
                        <?php endif ?>
                        <span class="box-created">Ajouté le <?= $timeline->getCreatedAt() ?></span>
                    </div>
                    <h2 class="timeline__content--title"><?= $timeline->title ?></h2>
                </div>
                <div class="box-detail">
                    <div class="box-date">
                        <?= $timeline->getDateStart()?>
                        <?= (isset($timeline->date_end) ? $timeline->getDateEnd() : '') ?>
                    </div>
                    <p><?= $timeline->getExcerpt() ?></p>
                    <div class="badges">
                        <?php foreach ($timeline->getTags() as $tags) : ?>
                            <div class="badges--items" style="background-color:<?= $tags->color ?>">
                                <a href="/tags/<?= $tags->tag_id ?>"><?= $tags->name ?></a>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <div class="box-link">
                        <div class="link">
                            <?= $timeline->getButton() ?>
                            <!-- <?= $timeline->addEvents() ?> -->

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