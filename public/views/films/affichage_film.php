<?php ob_start(); ?>

<h1 class="text-center">Affichage du film.</h1>

<div class="card mb-3">
    <img src="<?= uploads_url($film->getPoster()) ?>" class="film-image card-img-top" height="300px" alt="Image du Film">
    <div class="card-body">
        <h5 class="card-title"><?= $film->getTitle() ?></h5>
        <p class="card-text">On aurait pu metre une description du film.</p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Autheur: <?= $film->getAuthor() ?> </li>
            <li class="list-group-item">Année: <?= $film->getReleaseYear() ?> </li>
            <li class="list-group-item">Duration: <?= $film->GetMovieDuration() ?> </li>
        </ul>
    </div>
</div>

<?php if ($vues) : ?>
    <h1 class="text-center">Utilisateurs qui ont vu ce film</h1>
    <ul class="list-group list-group-flush">
        <?php foreach ($vues as $vue) : ?>
            <li class="list-group-item"><?= $vue['name'] ?> l'ha vue le <?= $vue['date_vue'] ?></li>
        <?php endforeach; ?>
    </ul>
<?php else : ?>
    <h4 class="text-center">Aucun utilisateur a vu ce film</h4>
<?php endif; ?>
<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>