<div class="container">
    <h1>Show du TagsController</h1>

    <h5 class="card-title"><?= $params['tag']->name ?></h5>
    <div class="cards">
        <?php foreach ($params['tag']->getTimelines() as $timelineTag) : ?>
            <?php foreach ($params['timelines'] as $timeline) : ?>
                <?php if ($timelineTag->id === $timeline->id) : ?>
                    <div class="box">
                <div class="box-card">
                    <div class="box-content">
                        <div class="box-image">
                            <img src="<?= IMAGES . $timeline->thumbnail ?>" alt="<?= $timeline->thumbnail_alt ?>">
                            <span class="box-created">Ajouté le <?= $timeline->getCreatedAt() ?></span>
                        </div>
                        <h3><?= $timeline->title ?></h3>
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
                        <div class="box-link">
                            <div class="link">
                                <?= $timeline->getButton() ?>
                            </div>
                            <div class="badges">
                            <?php foreach ($timeline->getTags() as $tags) : ?>
                            <a href="/tags/<?= $tags->tag_id ?>"><span class="badges--items"><?= $tags->name ?></span></a>
                            <?php endforeach ?>
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