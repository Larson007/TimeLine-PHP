<div class="anchors">
    <ul>
        <li><a href="#page-1" class="active"><?= $params['timeline']->date_start ?></a></li>
        <?php foreach ($params['timeline']->getEvents() as $event) : ?>
            <li><a href="#page-<?= $event->id ?>"><?= $event->date_start ?></a></li>
        <?php endforeach ?>

    </ul>
</div>
<div class="pg-wrapper">
    <div id="container" class="pg-container">
        <!-- pages -->
        <div data-anchor="page-1" class="pg-page active slider-timeline">
            <h2 class=""><?= $params['timeline']->title ?></h2>
            <div class="slider-timeline__media">
                <img src="<?= IMAGES . "timelines/" . $params['timeline']->thumbnail ?>" alt="<?= $params['timeline']->thumbnail_alt ?>">
            </div>
            <div class="slider-timeline__date">
                <p><?= $params['timeline']->date_start . " - " . $params['timeline']->date_end ?></p>
            </div>
            <div class="slider-timeline__description">
                <p><?= $params['timeline']->description ?></p>
            </div>
        </div>
        <?php foreach ($params['timeline']->getEvents() as $event) : ?>
            <div data-anchor="page-<?= $event->id ?>" class="pg-page slider-event">
                <h2 class="test"><?= $event->title ?></h2>
            </div>
        <?php endforeach ?>
    </div>
    <!-- pips will go here -->
</div>