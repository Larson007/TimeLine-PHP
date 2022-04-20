<div class="container">

    <h1>Toutes les Timelines</h1>
    <div class="cards">

        <?php foreach ($params['timelines'] as $timeline) : ?>
            <div class="box">
                <div class="box-card">
                    <div class="box-content">
                        <div class="box-image">

                        <?php if(isset($timeline->thumbnail) && !empty($timeline->thumbnail)) : ?>
                            <img src="<?= IMAGES ."timelines/". $timeline->thumbnail ?>" alt="<?= $timeline->thumbnail_alt ?>">
                            <?php else : ?>
                                <img src="<?= IMAGES ."timelines/". 'placeholder.jpg' ?>" alt="Pas de visuel disponible">
                        <?php endif ?>
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
                                <?= $timeline->addEvents() ?>
                                
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
        <?php endforeach ?>
    </div>
</div>