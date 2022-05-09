<div class="container">
    <h1>Show du TimelineController</h1>

    <h1><?= $params['timeline']->title ?></h1>
    <p><?= $params['timeline']->date_start ?></p>
    <p><?= $params['timeline']->date_end ?></p>
    <p><?= $params['timeline']->getCreatedAt() ?></p>

    <p><?= $params['timeline']->description ?></p>
    <img src="<?= IMAGES . "timelines/" . $params['timeline']->thumbnail ?>" alt="<?= $params['timeline']->thumbnail_alt ?>">
    <div>
        <?php foreach ($params['timeline']->getTags() as $tag) : ?>
            <span class="badge bg-info"><?= $tag->name ?></span>
        <?php endforeach ?>
    </div>
    <div>
        <?php foreach ($params['timeline']->getEvents() as $event) : ?>
            <span class="badge bg-info"><?= $event->title ?></span>
        <?php endforeach ?>
    </div>

    <a href="/timelines" class="btn btn-secondary">Revenir aux articles</a>
</div>


<?php foreach ($params['timeline']->getEvents() as $event) : ?>
    <p><?= $event->title ?></p>
<?php endforeach ?>

