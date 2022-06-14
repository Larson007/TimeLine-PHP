<div class="event">
    <h1 class="event--title">Edition : <?= $params['event']->title ?></h1>
    <form method="POST" enctype="multipart/form-data" class="event__form">

        <div class="event__form__content">
            <div class="event__form__content--item">
                <label for="title">Titre de l'évènement</label>
                <input type="text" name="title" id="title" value="<?= $params['event']->title ?>">
            </div>
            <div class="date">
                <p class="date--title">Date <span>(Mois et jour optionnel)</span></p>
                <div class="date__group">
                    <div class="date__group__item">
                        <label for="year">Année</label>
                        <input type="text" name="year" id="year" value="<?= $params['event']->year ?>">
                    </div>
                    <div class="date__group__item date__short">
                        <label for="month">Mois</label>
                        <input type="text" name="month" id="month" value="<?= $params['event']->month ?>">
                    </div>
                    <div class="date__group__item date__short">
                        <label for="day">jour</label>
                        <input type="text" name="day" id="day" value="<?= $params['event']->day ?>">
                    </div>
                    <div class="date__group__item date--bc">
                        <label for="date_bc">avant J.c.</label>
                        <input type="hidden" name="date_bc" id="date_bc" value="0">
                        <input type="checkbox" name="date_bc" id="date_bc" value="1" <?= ($params['event']->date_bc === 1) ? "checked" : ''?>>
                    </div>
                </div>
            </div>
            <div class="event__form__content--item">
                <label for="text">description</label>
                <textarea name="text" id="text" rows="8"><?= $params['event']->text ?></textarea>
            </div>
        </div>
        <div class="event__form__detail">
            <div class="event__form__detail__thumbnail">
                <div class="thumbnail__file">
                    <p>Média</p>
                    <input type="file" name="thumbnail_file" id="thumbnail_file" value="<?= $params['event']->thumbnail ?>" hidden>
                    <label for="thumbnail_file"><i class="fa-solid fa-upload"></i>Choisir un fichier <span>(max 2mo)</span></label>
                </div>
                <div class="thumbnail__preview">
                    <img id="preview" src="<?= IMAGES . "events/" . $params['event']->thumbnail ?>" alt="aperçu de l'image uploader" />
                </div>
            </div>
            <input type="hidden" name="thumbnail" id="thumbnail" value="<?= $params['event']->thumbnail ?>">
            <input type="hidden" name="thumbnail_alt" id="thumbnail_alt" value="<?= $params['event']->thumbnail_alt ?>">
            <input type="hidden" name="timeline_id" id="timeline_id" value="<?= $params['event']->timeline_id ?>">
        </div>
        <div class="event__submit">
            <button type="submit" class="event__submit--update event--btn">mettre à jour</button>
        </div>
    </form>
    <form action="/events/delete/<?= $params['event']->id ?>" method="POST" class="event__submit--delete">
        <button type="submit" class="event--btn event--btn-delete" onclick="return confirm('êtes-vous sûrs ?')">Supprimer</button>
    </form>
</div>