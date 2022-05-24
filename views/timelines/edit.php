<h1 class="timeline__create--title">Edition : <?= $params['timeline']->title ?></h1>
<div class="timeline__create">

    <form method="POST" class="timeline__create__form" enctype="multipart/form-data">

        <div class="timeline__create__form__content">
            <div class="timeline__create__form__content--item">
                <label for="title">Titre</label>
                <input type="text" name="title" id="title" value="<?= $params['timeline']->title ?>">
            </div>
            <div class="timeline__create__form__content--date">
                <div class="date__group date__group--start">
                    <label for="date_start">Année de début</label>
                    <div class="date__group__item">
                        <input class="form__group__items--input" type="text" name="date_start" id="date_start" value="<?= $params['timeline']->date_start ?>">
                        <div class="date__group__check">
                            <label for="date_start_bc">Avant J.C.</label>
                            <input type="hidden" name="date_start_bc" value="0">
                            <input type="checkbox" name="date_start_bc" id="date_start_bc" value="1" <?= ($params['timeline']->date_start_bc === 1) ? "checked" : ''?>>
                        </div>
                    </div>
                </div>
                <div class="date__group">
                    <label for="date_end">Année de fin <span>(optionnel)</span></label>
                    <div class="date__group__item">
                        <input class="form__group__items--input" type="text" name="date_end" id="date_end" value="<?= $params['timeline']->date_end ?>">
                        <div class="date__group__check">
                            <label for="date_end_bc">Avant JC</label>
                            <input type="hidden" name="date_end_bc" value="0">
                            <input type="checkbox" name="date_end_bc" id="date_end_bc" value="1" <?= ($params['timeline']->date_end_bc === 1) ? "checked" : ''?>>
                        </div>
                    </div>
                </div>
            </div>
            <div class="timeline__create__form__content--item">
                <label for="description">description</label>
                <textarea class="form__group__items--input" name="description" id="description" rows="8"><?= $params['timeline']->description ?></textarea>
            </div>
        </div>
        <div class="timeline__create__form__detail">
            <div class="timeline__create__form__detail__thumbnail">
                <div class="thumbnail__file">
                    <p>Thumbnail</p>
                    <input class="form__group__items--input" type="file" name="thumbnail_file" id="thumbnail_file" value="<?= $params['timeline']->thumbnail ?>" hidden>
                    <label for="thumbnail_file"><i class="fa-solid fa-upload"></i>Choisir un fichier <span>(max 2mo)</span></label>
                </div>
                <div class="thumbnail__preview">
                    <img id="preview" src="<?= IMAGES . "timelines/" . $params['timeline']->thumbnail ?>" alt="aperçu de l'image uploader" />
                </div>
            </div>
            <input type="hidden" name="thumbnail" id="thumbnail" value="<?= $params['timeline']->thumbnail ?>">
            <input type="hidden" name="thumbnail_alt" id="thumbnail_alt" value="<?= $params['timeline']->thumbnail_alt ?>">
            <input type="hidden" name="user_id" id="user_id" value="<?= $params['timeline']->user_id ?>">
            <div class="timeline__create__form__detail__tags">
                <p>Catégories</p>
                <div class="tags__group">
                    <?php foreach ($params['tags'] as $tag) : ?>
                        <div class="tags__group--item">
                            <input class="check" type="checkbox" name="tags[]" id=<?= $tag->id ?> value="<?= $tag->id ?>" <?php foreach ($params['timeline']->getTags() as $timelineTags) {
                                                                                                                                echo ($timelineTags->tag_id === $tag->id) ? 'checked' : '';
                                                                                                                            } ?>>
                            <label for=<?= $tag->id ?>><?= $tag->name ?></label>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <button type="submit" class="submit--edit">Mettre à jour</button>
    </form>
</div>