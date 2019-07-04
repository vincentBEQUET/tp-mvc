<?php ob_start(); ?>

<h1 class="text-center">Affichage du film.</h1>

<div class="card mb-3">
    <img src="<?= uploads_url($film['poster']) ?>" class="card-img-top" alt="Image du Film">
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

<p>Afficher les films par utilisateur: </p><br>
<form>
    <fieldset>
        <input type="text" id="name" placeholder="Nom de l'utilisateur">
        <input type="submit" id="validation" value="Rechercher">
    </fieldset>
</form>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>