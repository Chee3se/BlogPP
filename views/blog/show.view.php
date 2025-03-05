<?php component('header', ['title' => 'Bloga ieraksts']); ?>
<div class="flex flex-row">
    <a href="/" class="text-2xl bg-red-600 px-2 rounded-xl fixed left-20">👈</a>
    <p class="my-6 text-4xl mx-12 font-semibold text-center"><?= htmlspecialchars($post['content']) ?></p>
    <a href="/edit?id=<?= $post['id'] ?>" class="rounded-xl bg-gradient-to-tr from-yellow-500 to-orange-500 font-semibold text-white px-4 py-2 my-auto hover:scale-105 transition duration-200 hover:from-yellow-600 hover:to-orange-600">Rediģēt</a>
</div>
<?php component('footer'); ?>
