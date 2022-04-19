<div class="container">
    <h1>Create Tags View</h1>

    <form method="POST" class="form" enctype="multipart/form-data">

        <div class="form__tags--left">
            <div class="form__tags__title">
                <label for="name">Titre</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form__tags__color">
                <label for="color">Couleur</label>
                <input type="color" name="color" id="color">
            </div>
        </div>
        <div class="form__group--right">
            <div class="form__group__image">
                <div class="form__group__image--file">
                    <p>Thumbnail</p>
                    <input class="form__group__items--input" type="file" name="thumbnail_file" id="thumbnail_file">
                    <label for="thumbnail_file"><i class="fa-solid fa-upload"></i>Choisir un fichier</label>
                </div>
                <div class="form__group__image--preview">
                    <img id="preview" src="#" alt="aperçu de l'image uploader" />
                </div>
            </div>
        </div>
        <button type="submit" class="">Enregistrer</button>
    </form>



    <!-- <form method="POST" class="form">
        <div class="form__group--left">
            <div class="form__group__items">
                <label for="name">Titre</label>
                <input class="form__group__items--input" type="text" name="name" id="name">
            </div>
            <div class="form__group__items">
                <label for="thumbnail">thumbnail</label>
                <input class="form__group__items--input" type="file" name="thumbnail" id="thumbnail">
            </div>
            <div class="form__group__items">
                <label for="color">Couleur</label>
                <input class="form__group__items--input" type="color" name="color" id="color">
            </div>
        </div>
        <button type="submit" class="">Enregistrer</button>
    </form> -->

</div>