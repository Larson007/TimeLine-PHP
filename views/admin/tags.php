<div class="container">

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
                    <th><?= $tag->id ?></th>
                    <td><?= $tag->name ?></td>
                    <td class="tag__color">
                        <div class="tag__color--color" style="background-color:<?= $tag->color ?>"><p><?= $tag->color ?></p></div>
                    </td>
                    <td class="dashboard--images"><img src="<?= IMAGES . "tags/" . $tag->thumbnail ?>" alt=""></td>
                    <td>
                        <div class="table--action">
                        <a href="/tags/edit/<?= $tag->id ?>" class="btn btn-edit">Modifier</a>
                        <form action="/tag/delete/<?= $tag->id ?>" method="POST" class="">
                            <button type="submit" class="btn btn-delete">Supprimer</button>
                            </div>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>