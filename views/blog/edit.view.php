<?php component('header', ['title' => 'Regiģēd bloga ierakstu']); ?>
    <h1>Rediģēt bloga ierakstu</h1>
    <form action="/update?id=<?= $post['id'] ?>" method="post">
        <input type="hidden" name="id" value="<?= $post['id'] ?>">
        <textarea name="content"><?= htmlspecialchars($post['content']) ?></textarea>
        <button type="submit">Saglabāt</button>
<?php component('footer'); ?>