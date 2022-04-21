<div class="container">
    <?php if (isset($_GET['success'])) : ?>
        <div class="alert alert-success">Vous êtes connecté !</div>
    <?php endif ?>
    <h1>Administration des articles</h1>

    <a href="/admin/posts/create" class="btn btn-success my-3">Créer un nouvel article</a>
    <div class="">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Publié le</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($params['timelines'] as $timeline) : ?>
                    <tr>
                        <th><?= $timeline->id ?></th>
                        <td><?= $timeline->title ?></td>
                        <td><?= $timeline->getCreatedAt() ?></td>
                        <td class="table--action">
                        <?= $timeline->addEvents() ?>
                            <a href="/admin/posts/edit/<?= $timeline->id ?>" class="">Modifier</a>
                            <form action="/timeline/delete/<?= $timeline->id ?>" method="POST" class="">
                                <button type="submit" class="">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Couleur</th>
                    <th>Images</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($params['tags'] as $tag) : ?>
                    <tr>
                        <th><?= $tag->id ?></th>
                        <td><?= $tag->name ?></td>
                        <td><?= $tag->color ?></td>
                        <td><?= $tag->thumbnail ?></td>
                        <td class="table--action">
                            <a href="/admin/posts/edit/<?= $tag->id ?>" class="">Modifier</a>
                            <form action="/tag/delete/<?= $tag->id ?>" method="POST" class="">
                                <button type="submit" class="">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>