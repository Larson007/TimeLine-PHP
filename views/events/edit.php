<?php

dump($params['event']);


?>

<div class="container">
    <h1>Creation d'un événement</h1>

    <nav aria-label="Breadcrumb" class="ariane">
        <ul>
            <li class="test"><?= $params['event']->date_start ?></li>
        </ul>
    </nav>

    <form method="POST" class="form" enctype="multipart/form-data">

        <div class="form__group--left">
            <div class="form__group__items">
                <label for="title">Titre de l'évènement</label>
                <input class="form__group__items--input" type="text" name="title" id="title" value="<?= $params['event']->title ?? '' ?>">
            </div>
            <div class="form__group__date">
                <div class="form__group__date__items">
                    <label for="date_start">Date de début</label>
                    <input class="form__group__items--input" type="text" name="date_start" id="date_start" value="<?= $params['event']->date_start ?? '' ?>">
                </div>
                <div class="form__group__date__items">
                    <label for="date_end">Date de fin (optionnel)</label>
                    <input class="form__group__items--input" type="text" name="date_end" id="date_end" value="<?= $params['event']->date_end ?? '' ?>">
                </div>
            </div>
            <div class="form__group__items">
                <label for="text">description</label>
                <textarea class="form__group__items--input" name="text" id="text" rows="8"><?= $params['event']->text ?? '' ?></textarea>
            </div>
        </div>
        <div class="form__group--right">
            <div class="form__group__image">
                <div class="form__group__image--file">
                    <p>Média</p>
                    <input class="form__group__items--input" type="file" name="thumbnail_file" id="thumbnail_file">
                    <label for="thumbnail_file"><i class="fa-solid fa-upload"></i>Choisir un fichier</label>
                </div>

                <div class="form__group__image--preview">
                    <img id="preview" src="#" alt="aperçu de l'image uploader" />
                </div>
            </div>
            <div class="form__group__image--current">
                <p>Images Actuel</p>
                <img src="<?= ((isset($params['event']->thumbnail)) && !empty($params['event']->thumbnail)) ? IMAGES . "events/" . $params['event']->thumbnail : IMAGES . 'placeholder.jpg' ?>" alt="Image actuellemnt uploader" />
            </div>
            <input type="hidden" name="thumbnail" id="thumbnail" value="<?= $params['event']->thumbnail ?>">
            <input type="hidden" name="thumbnail_alt" id="thumbnail_alt" value="<?= $params['event']->thumbnail_alt ?>">
            <input type="hidden" name="timeline_id" id="timeline_id" value="<?= $params['event']->timeline_id ?>">
        </div>
        <button type="submit" class="">Editer</button>
    </form>
    <form action="/events/delete/<?= $params['event']->id ?>" method="POST" class="">
        <button type="submit" class="btn btn-delete">Supprimer</button>
</div>
</form>
</div>