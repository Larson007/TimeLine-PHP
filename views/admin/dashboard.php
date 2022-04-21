<div class="container">
    <?php if (isset($_GET['success'])) : ?>
        <div class="alert alert-success">Vous êtes connecté !</div>
    <?php endif ?>
    <h1>Administration des articles</h1>

    <a href="/admin/posts/create" class="btn btn-success my-3">Créer un nouvel article</a>

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
                    <th ><?= $timeline->id ?></th>
                    <td><?= $timeline->title ?></td>
                    <td><?= $timeline->getCreatedAt() ?></td>
                    <td class="table--action">
                        <a href="/admin/posts/edit/<?= $timeline->id ?>" class="">Modifier</a>
                        <form action="/admin/posts/delete/<?= $timeline->id ?>" method="POST" class="">
                            <button type="submit" class="">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>