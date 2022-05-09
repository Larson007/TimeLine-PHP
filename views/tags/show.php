<div class="container">
    <h1>Catégories <?= $params['tag']->name ?></h1>

    <h5 class="card-title"></h5>
    <div class="cards">
        <?php foreach ($params['tag']->getTimelines() as $timelineTag) : ?>
            <?php foreach ($params['timelines'] as $timeline) : ?>
                <?php if ($timelineTag->id === $timeline->id) : ?>
                    <div class="box">
            <div class="box-card">
                <div class="box-content">
                    <div class="box-image">
                        <?php if (isset($timeline->thumbnail) && !empty($timeline->thumbnail)) : ?>
                            <img src="<?= IMAGES . "timelines/" . $timeline->thumbnail ?>" alt="<?= $timeline->thumbnail_alt ?>" width="380px" height="210px">
                        <?php else : ?>
                            <img src="<?= IMAGES . "timelines/" . 'placeholder.jpg' ?>" alt="Pas de visuel disponible" width="380px" height="210px">
                        <?php endif ?>
                        <span class="box-created">Ajouté le <?= $timeline->getCreatedAt() ?></span>
                    </div>
                    <h2 class="timeline__content--title"><?= $timeline->title ?></h2>
                </div>
                <div class="box-detail">
                    <p class="box-date">
                        <?php if (isset($timeline->date_start) && !empty($timeline->date_start)) : ?>
                            <?= $timeline->date_start ?>
                        <?php endif ?>
                        <?php if (isset($timeline->date_end) && !empty($timeline->date_end)) : ?>
                            <?= '  -  ' . $timeline->date_end ?>
                        <?php endif ?>
                    </p>
                    <p><?= $timeline->getExcerpt() ?></p>
                    <div class="badges">
                        <?php foreach ($timeline->getTags() as $tags) : ?>
                            <div class="badges--items">
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
                <?php endif ?>
            <?php endforeach ?>
        <?php endforeach ?>
    </div>

</div>