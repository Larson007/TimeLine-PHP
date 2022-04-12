<div class="container">
    <h1>Show du TimelineController</h1>

    <h1><?= $params['timeline']->title ?></h1>
    <div>
        <?php foreach ($params['timeline']->getTags() as $tag) : ?>
            <span class="badge bg-info"><?= $tag->name ?></span>
        <?php endforeach ?>
    </div>
    <p><?= $params['timeline']->description ?></p>
    <a href="/timelines" class="btn btn-secondary">Revenir aux articles</a>
</div>