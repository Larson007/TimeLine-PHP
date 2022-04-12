<div class="container">

    <h1>Index du TimelineController</h1>
<div class="cards">

    <?php foreach ($params['timelines'] as $timeline) : ?>
        <div class="box">
            <div class="box-card">
                <div class="box-content car b">
                    <div class="box-image">
                        <img src="<?= IMAGES . $timeline->thumbnail ?>" alt="<?= $timeline->thumbnail_alt ?>">
                        <span class="box-created">Ajouté le <?= $timeline->getCreatedAt() ?></span>
                    </div>
                    <h3><?= $timeline->title ?></h3>
                </div>
                <div class="box-detail">
                    <p class="box-date"><?= $timeline->getDateStart() ?>
                    <?php if (isset($timeline->date_end)) : ?>
                        <?= ' - ' . $timeline->getDateEnd() ?> </p>
                        <?php endif ?>
                        <p><?= $timeline->getExcerpt() ?></p>
                        <!-- <a class="style1" href="#"><span>Timeline</span></a> -->
                        <?= $timeline->getButton() ?>
                    </div>
                    <div class="box-toggle">
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </div>
                </div>
            </div>
            <?php endforeach ?>    
        </div>
    </div>