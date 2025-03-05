<?php component('header', ['title' => 'Visi bloga ieraksti']); ?>
<h1 class="text-7xl font-extrabold mb-6">Visi bloga ieraksti</h1>
<a href="/create" class="border rounded-2xl px-6 py-1 bg-gradient-to-br text-white font-bold from-green-600 hover:scale-105 transition duration-200 to-cyan-700">Izveidot jaunu ierakstu</a>
<ul class="mt-6">
    <?php foreach ($posts as $post): ?>
        <li class="mx-auto flex flex-row mb-4">
            <div class="relative border border-2 rounded-full w-7 h-7 mr-2 border-green-600"><span class="absolute -right-0.5 -bottom-2.5 text-green-600 text-9xl">.</span></div>
            <a href="/show?id=<?= $post['id'] ?>" class="mr-4 text-xl font-semibold px-5 hover:text-blue-800 hover:scale-105 transform duration-200"><?= htmlspecialchars($post['content']) ?></a>
            <form action="/delete" method="post" class="ml-auto">
                <input type="hidden" name="id" value="<?= $post['id'] ?>">
                <button type="submit" class="cursor-pointer hover:scale-110 duration-200">❌</button>
            </form>
        </li>
    <?php endforeach; ?>
</ul>
<?php component('footer'); ?>