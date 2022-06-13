<article class="timeline-slider">

    <section data-anchor="page 1">
        <div class="slider">
            <h2 class="slider__media--title"><?= $params['timeline']->title ?></h2>
            <div class="slider__content">
                <div class="slider__media">
                    <img src="<?= IMAGES . "timelines/" . $params['timeline']->thumbnail ?>" alt="<?= $params['timeline']->thumbnail_alt ?>">
                </div>
                <div class="slider__detail">
                    <div class="slider__detail--date">
                        <p>De <span><?= $params['timeline']->date_start ?></span><?= ($params['timeline']->date_start_bc === '1' || $params['timeline']->date_start_bc === 1) ? "<span class='date_bc'> avant J.C.</span>" : '' ?>
                            à <span><?= $params['timeline']->date_end ?></span><?= ($params['timeline']->date_end_bc === '1' || $params['timeline']->date_end_bc === 1) ? "<span class='date_bc'> avant J.C.</span>" : '' ?> </p>
                    </div>
                    <div class="slider__detail--description">
                        <p><?= $params['timeline']->description ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php foreach ($params['timeline']->getEvents() as $event) : ?>
        <section data-anchor="page-<?= $event->id ?>" class="pg-page slider-timeline">
            <div class="slider">
                <h2 class="slider__media--title"><?= $event->title ?></h2>
                <div class="slider__content">
                    <div class="slider__media">
                            <img src="<?= IMAGES . "events/" . $event->thumbnail ?>" alt="<?= $event->thumbnail_alt ?>">
                    </div>
                    <div class="slider__detail">
                        <div class="slider__detail--date">
                            <p><span>
                                    <?php if (!isset($event->day) && !isset($event->month)) : ?>
                                        <?php if ($event->date_bc === 1 || $event->date_bc === '1') : ?>
                                            <?= $event->year . "<span class='date_bc'> avant J.C.</span>" ?>
                                        <?php else : ?>
                                            <?= $event->year ?>
                                        <?php endif ?>
                                    <?php elseif (!isset($event->day) && isset($event->month)) : ?>
                                        <?= $event->month . " / " ?>
                                        <?php if ($event->date_bc === 1 || $event->date_bc === '1') : ?>
                                            <?= $event->year . "<span class='date_bc'> avant J.C.</span>" ?>
                                        <?php else : ?>
                                            <?= $event->year ?>
                                        <?php endif ?>
                                    <?php elseif (isset($event->day) && isset($event->month)) : ?>
                                        <?= $event->day . " / " . $event->month . " / " ?>
                                        <?php if ($event->date_bc === 1 || $event->date_bc === '1') : ?>
                                            <?= $event->year . "<span class='date_bc'> avant J.C.</span>" ?>
                                        <?php else : ?>
                                            <?= $event->year ?>
                                        <?php endif ?>
                                    <?php endif ?>
                                </span></p>
                        </div>
                        <div class="slider__detail--description">
                            <p><?= $event->text ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach ?>
</article>