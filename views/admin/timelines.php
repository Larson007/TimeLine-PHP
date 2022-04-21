<div class="container">

    <h1>Administration des timelines</h1>

    <a href="/timeline/create" class="btn btn-success my-3">Créer une nouvelle timeline</a>

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
</div>