<?php component('header', ['title' => 'Izveidot bloga ierakstu']); ?>
    <h1>Izveidot bloga ierakstu</h1>
    <form action="/store" method="post">
        <textarea name="content" placeholder="Ieraksta saturs"></textarea>
        <button type="submit">Izveidot</button>
    </form>
<?php component('footer'); ?>