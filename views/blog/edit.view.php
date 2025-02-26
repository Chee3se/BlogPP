<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rediģēt bloga ierakstu</title>
</head>
<body>
    <h1>Rediģēt bloga ierakstu</h1>
    <form action="/update?id=<?= $post['id'] ?>" method="post">
        <input type="hidden" name="id" value="<?= $post['id'] ?>">
        <textarea name="content"><?= htmlspecialchars($post['content']) ?></textarea>
        <button type="submit">Saglabāt</button>
    </form>
</body>