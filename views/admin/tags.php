<div class="table--form">

    <h1>Administration des Catégories</h1>

    <a class="btn btn-create" href="/tag/create">Créer une nouvelle catégories</a>

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
                    <th class="table--id"><?= $tag->id ?></th>
                    <td><?= $tag->name ?></td>
                    <td class="tag__color">
                        <div class="tag__color--color" style="background-color:<?= $tag->color ?>">
                            <p><?= $tag->color ?></p>
                        </div>
                    </td>
                    <td class="dashboard--images"><img src="<?= IMAGES . "tags/" . $tag->thumbnail ?>" alt=""></td>
                    <td>
                        <div class="table--action">
                            <a href="/tags/edit/<?= $tag->id ?>" class="btn btn-edit">Edit</a>
                            <form action="/tag/delete/<?= $tag->id ?>" method="POST" class="">
                                <button type="submit" class="btn btn-delete" onclick="return confirm('êtes-vous sûrs ?')">Delete</button>
                        </div>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>