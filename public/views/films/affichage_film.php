<?php ob_start(); ?>

<h1 class="text-center">Affichage du film.</h1>

<div class="card mb-3">
    <img src="<?= uploads_url($film['poster']) ?>" class="film-image card-img-top" height="300px" alt="Image du Film">
    <div class="card-body">
        <h5 class="card-title"><?= $film['title'] ?></h5>
        <p class="card-text">On aurait pu metre une description du film.</p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Autheur: <?= $film['author'] ?> </li>
            <li class="list-group-item">Année: <?= $film['release_year'] ?> </li>
            <li class="list-group-item">Duration: <?= $film['movie_duration'] ?> </li>
        </ul>
    </div>
</div>

<h1 class="text-center">Utilisateurs qui ont vu ce film</h1>
<?php if ($vues) : ?>
    <ul class="list-group list-group-flush">
        <?php foreach ($vues as $vue) : ?>
            <li class="list-group-item"><?= $vue['name'] ?> l'ha vue le <?= $vue['date_vue'] ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>