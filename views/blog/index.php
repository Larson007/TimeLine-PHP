<h1>Les derniers articles</h1>

    <?php foreach ($params['posts'] as $post) : ?>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"><?= $post->title ?></h5>
                <div>
                    <?php foreach($post->getTags() as $tag ) : ?>
                    <span class="badge bg-success"><a href="/tags/<?= $tag->id ?>" class="text-decoration-none text-white"><?= $tag->name ?></a></span>
                    <?php endforeach ?>
                </div>
                <small class="text-info">Publié le <?= $post->getCreatedAt() ?></small>
                <p class="card-text"><?= $post->getExcerpt() ?></p>
                <?= $post->getButton() ?>
            </div>
        </div>
    <?php endforeach ?>
