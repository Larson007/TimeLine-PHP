<div class="anchors">
    <ul>
        <li class="anchors-timeline">
            <a href="#page-1" class="active"><span><?= htmlspecialchars(($params['timeline']->date_start_bc === 1 || $params['timeline']->date_start_bc === '1') ? '- ' . $params['timeline']->date_start :  $params['timeline']->date_start) ?></span><?= htmlspecialchars($params['timeline']->title) ?></a>
        </li>
        <span><i class="fa-solid fa-arrow-left"></i></span>
        <?php foreach ($params['timeline']->getEvents() as $event) : ?>
            <li>
                <a href="#page-<?= htmlspecialchars($event->id) ?>"><span><?= htmlspecialchars(($event->date_bc === 1 || $event->date_bc === '1') ? '- ' . $event->year : $event->year) ?></span><?= htmlspecialchars($event->title) ?></a>
            </li>
            <span><i class="fa-solid fa-arrow-left"></i></span>
        <?php endforeach ?>
        <li class="anchors-timeline">
            <a href="#page-1"><span><?= htmlspecialchars(($params['timeline']->date_end_bc === 1 || $params['timeline']->date_end_bc === '1') ? '- ' . $params['timeline']->date_end :  $params['timeline']->date_end) ?></span>Fin</a>
        </li>

    </ul>
</div>
<div class="pg-wrapper">
    <div id="container" class="pg-container">
        <!-- pages -->
        <div data-anchor="page-1" class="pg-page active slider-timeline">
            <div class="slider">
                <div class="slider__media">
                    <h2 class="slider__media--title"><?= htmlspecialchars($params['timeline']->title) ?></h2>
                    <div class="slider__media--image">
                        <img src="<?= htmlspecialchars(IMAGES . "timelines/" . $params['timeline']->thumbnail) ?>" alt="<?= htmlspecialchars($params['timeline']->thumbnail_alt) ?>">
                    </div>
                </div>
                <div class="slider__detail">
                    <div class="slider__detail--date">
                        <p>De <span><?= htmlspecialchars($params['timeline']->date_start) ?></span><?= htmlspecialchars(($params['timeline']->date_start_bc === '1' || $params['timeline']->date_start_bc === 1) ? "<span class='date_bc'> avant J.C.</span>" : '') ?>
                            à <span><?= htmlspecialchars($params['timeline']->date_end) ?></span><?= htmlspecialchars(($params['timeline']->date_end_bc === '1' || $params['timeline']->date_end_bc === 1) ? "<span class='date_bc'> avant J.C.</span>" : '') ?> </p>
                    </div>
                    <div class="slider__detail--description">
                        <p><?= htmlspecialchars($params['timeline']->description) ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php foreach ($params['timeline']->getEvents() as $event) : ?>
            <div data-anchor="page-<?= htmlspecialchars($event->id) ?>" class="pg-page slider-timeline">
                <div class="slider">
                    <div class="slider__media">
                        <h2 class="slider__media--title"><?= htmlspecialchars($event->title) ?></h2>
                        <div class="slider__media--image">
                            <img src="<?= htmlspecialchars(IMAGES . "events/" . $event->thumbnail) ?>" alt="<?= htmlspecialchars($event->thumbnail_alt) ?>">
                        </div>
                    </div>
                    <div class="slider__detail">
                        <div class="slider__detail--date">
                            <p><span>
                                    <?php if (!isset($event->day) && !isset($event->month)) : ?>
                                        <?php if ($event->date_bc === 1 || $event->date_bc === '1') : ?>
                                            <?= htmlspecialchars($event->year . "<span class='date_bc'> avant J.C.</span>") ?>
                                        <?php else : ?>
                                            <?= htmlspecialchars($event->year) ?>
                                        <?php endif ?>
                                    <?php elseif (!isset($event->day) && isset($event->month)) : ?>
                                        <?= htmlspecialchars($event->month . " / ") ?>
                                        <?php if ($event->date_bc === 1 || $event->date_bc === '1') : ?>
                                            <?= htmlspecialchars($event->year . "<span class='date_bc'> avant J.C.</span>") ?>
                                        <?php else : ?>
                                            <?= htmlspecialchars($event->year) ?>
                                        <?php endif ?>
                                    <?php elseif (isset($event->day) && isset($event->month)) : ?>
                                        <?= htmlspecialchars($event->day . " / " . $event->month . " / ") ?>
                                        <?php if ($event->date_bc === 1 || $event->date_bc === '1') : ?>
                                            <?= htmlspecialchars($event->year . "<span class='date_bc'> avant J.C.</span>") ?>
                                        <?php else : ?>
                                            <?= htmlspecialchars($event->year) ?>
                                        <?php endif ?>
                                    <?php endif ?>
                                </span></p>
                        </div>
                        <div class="slider__detail--description">
                            <p><?= htmlspecialchars($event->text) ?></p>
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