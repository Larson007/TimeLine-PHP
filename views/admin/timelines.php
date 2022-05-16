    <h1>Administration des timelines</h1>

    <a class="btn btn-create" href="/timeline/create" class="btn btn-success my-3">Créer une nouvelle timeline</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Publié le</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Thumbnail</th>
                <th>Description du thumbnail</th>
                <th>Catégories</th>
                <th>Créér par</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($params['timelines'] as $timeline) : ?>
                <tr>
                    <th><?= $timeline->id ?></th>
                    <td><?= $timeline->title ?></td>
                    <td><?= $timeline->getCreatedAt() ?></td>
                    <td><?= $timeline->date_start ?></td>
                    <td><?= $timeline->date_end ?></td>
                    <td class="dashboard--images">
                        <?php if (isset($timeline->thumbnail) && !empty($timeline->thumbnail)) : ?>
                            <img src="<?= IMAGES . "timelines/" . $timeline->thumbnail ?>" alt="">
                        <?php endif ?>
                    </td>
                    <td><?= $timeline->thumbnail_alt ?></td>
                    <td>
                        <div class="table--tags">
                            <?php foreach ($timeline->getTags() as $tags) : ?>
                                <p><?= $tags->name ?></p>
                            <?php endforeach ?>
                        </div>
                    </td>
                    <?php foreach ($params['users'] as $user) : ?>
                        <?php if ($user->id === $timeline->user_id) : ?>
                            <td><?= $user->username ?></td>
                        <?php endif ?>
                    <?php endforeach ?>
                    <td>
                        <div class="table--action">
                            <a href="/events/create/<?= $timeline->id ?>" class="btn btn-add"><span>Add Event</span></a>
                            <a href="/timeline/edit/<?= $timeline->id ?>" class="btn btn-edit">Edit</a>
                            <form action="/timeline/delete/<?= $timeline->id ?>" method="POST" class="form--delete">
                                <button type="submit" class="btn btn-delete" onclick="return confirm('êtes-vous sûrs ?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>