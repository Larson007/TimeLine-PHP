<div class="anchors">
    <ul>
        <li class="anchors-timeline">
            <a href="#page-1" class="active"><span><?= ($params['timeline']->date_start_bc === 1) ? '- ' . $params['timeline']->date_start :  $params['timeline']->date_start ?></span><?= $params['timeline']->title ?></a>
        </li>
        <span><i class="fa-solid fa-arrow-left"></i></span>
        <?php foreach ($params['timeline']->getEvents() as $event) : ?>
            <li>
                <a href="#page-<?= $event->id ?>"><span><?= ($event->date_bc === 1) ? '- ' . $event->year : $event->year ?></span><?= $event->title ?></a>
            </li>
            <span><i class="fa-solid fa-arrow-left"></i></span>
        <?php endforeach ?>
        <li class="anchors-timeline">
            <a href="#page-1" class="active"><span><?= ($params['timeline']->date_end_bc === 1) ? '- ' . $params['timeline']->date_end :  $params['timeline']->date_end ?></span>Fin</a>
        </li>

    </ul>
</div>
<div class="pg-wrapper">
    <div id="container" class="pg-container">
        <!-- pages -->
        <div data-anchor="page-1" class="pg-page active slider-timeline">
            <div class="slider">
                <div class="slider__media">
                    <h2 class="slider__media--title"><?= $params['timeline']->title ?></h2>
                    <div class="slider__media--image">
                        <img src="<?= IMAGES . "timelines/" . $params['timeline']->thumbnail ?>" alt="<?= $params['timeline']->thumbnail_alt ?>">
                    </div>
                </div>
                <div class="slider__detail">
                    <div class="slider__detail--date">
                        <p>De
                            <span>
                                <?= ($params['timeline']->date_start_bc === 1) ? $params['timeline']->date_start . ' avant J.C.' :  $params['timeline']->date_start ?>
                            </span>
                            à
                            <span>
                                <?= ($params['timeline']->date_end_bc === 1) ? $params['timeline']->date_end . ' avant J.C.' :  $params['timeline']->date_end ?>
                            </span>
                        </p>
                    </div>
                    <div class="slider__detail--description">
                        <p><?= $params['timeline']->description ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php foreach ($params['timeline']->getEvents() as $event) : ?>
            <div data-anchor="page-<?= $event->id ?>" class="pg-page slider-timeline">
                <div class="slider">
                    <div class="slider__media">
                        <h2 class="slider__media--title"><?= $event->title ?></h2>
                        <div class="slider__media--image">
                            <img src="<?= IMAGES . "events/" . $event->thumbnail ?>" alt="<?= $event->thumbnail_alt ?>">
                        </div>
                    </div>
                    <div class="slider__detail">
                        <div class="slider__detail--date">
                            <p><span><?= $event->day . " / " . $event->month . " / " . $event->year ?></span></p>
                        </div>
                        <div class="slider__detail--description">
                            <p><?= $event->text ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <!-- pips will go here -->
</div>

<!-- <script>
    const containers = document.getElementById('containers')


    if (document.querySelector("#containers").classList.contains('containers'))
        containers.classList.remove('containers');
    // console.log('Class present');
    // else
    //     console.log('Class not present');
</script> -->