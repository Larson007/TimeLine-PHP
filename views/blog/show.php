<h1><?= $params['post']->title ?></h1>
<div>
    <?php foreach ($params['post']->getTags() as $tag) : ?>
        <span class="badge bg-info"><?= htmlspecialchars($tag->name) ?></span>
    <?php endforeach ?>
</div>
<p><?= htmlspecialchars($params['post']->content) ?></p>
<a href="/posts" class="btn btn-secondary">Revenir aux articles</a>