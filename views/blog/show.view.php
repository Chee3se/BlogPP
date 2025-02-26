<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloga ieraksts</title>
</head>
<body>
    <a href="/">Atpakaļ</a>
    <p><?= htmlspecialchars($post['content']) ?></p>
    <a href="/edit?id=<?= $post['id'] ?>">Rediģēt</a>
</body>
</html>
