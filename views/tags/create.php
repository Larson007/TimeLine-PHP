<div class="tags__create">
    <h1 class="tags__create--title">Creation d'une catégories</h1>

    <form method="POST" enctype="multipart/form-data" class="tags__create__form">

        <div class="tags__create__form__content">
            <div class="tags__create__form__content--item">
                <label for="name">Titre</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="tags__create__form__content--item">
                <label for="color">Couleur</label>
                <input type="color" name="color" id="color">
            </div>
        </div>
        <div class="tags__create__form__thumbnail">
            <div class="thumbnail__file">
                <p>Thumbnail</p>
                <input type="file" name="thumbnail_file" id="thumbnail_file" hidden>
                <label for="thumbnail_file"><i class="fa-solid fa-upload"></i>Choisir un fichier <span>(max 2mo)</span></label>
            </div>
            <div class="thumbnail__preview">
                <img id="preview" src="#" alt="aperçu de l'image uploader" />
            </div>
        </div>
        <div class="tags__submit">
            <button type="submit">Enregistrer</button>
        </div>
    </form>

</div>