<div class="container">

    <h1>Administration des Catégories</h1>

    <a href="/tag/create" class="btn btn-success my-3">Créer une nouvelle catégories</a>

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