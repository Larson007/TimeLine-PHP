<h1><?= $params['post']->title ?? 'Créer un nouvel article' ?></h1>

<form action="<?= isset($params['post']) ? "/admin/posts/edit/{$params['post']->id}" : "/admin/posts/create" ?>" method="POST">
    <div class="form-group mb-3">
        <label for="title">Titre de l'article</label>
        <input class="form-control" type="text" name="title" id="title" value="<?= $params['post']->title ?? '' ?>">
    </div>
    <div class="form-group mb-3">
        <label for="content">Contenu de l'article</label>
        <textarea name="content" id="content" class="form-control" rows="8"><?= $params['post']->content ?? '' ?></textarea>
    </div>
    <div class="form-group mb-3">
        <label for="tags">Tags de l'article</label>
        <select multiple class="form-control" name="tags[]" id="tags">
            <?php foreach ($params['tags'] as $tag) : ?>
                <option value="<?= $tag->id ?>"
                    <?php if (isset($params['post'])) : ?> 
                        <?php foreach ($params['post']->getTags() as $postTag) {
                                echo ($tag->id === $postTag->id) ? 'selected' : '';
                        } ?>
                    <?php endif ?>><?= $tag->name ?>
                </option>
            <?php endforeach ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary"><?= isset($params['post']) ? "Enregistrer les modifications" : "Enregistrer un article" ?></button>
</form>