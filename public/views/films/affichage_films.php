<?php ob_start(); ?>

<h1 class="text-center">Affichage des films.</h1>
<table class="table">
    <thead>
        <tr class="text-center">
            <th>&nbsp;</th>
            <th>Titre</th>
            <th>Type ID</th>
            <th>Author</th>
            <th>Année</th>
            <th>Duration</th>
            <th>Poster</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($films as $film) : ?>
            <tr class="text-center">
                <td><a href="<?= url_film ($film['id']) ?>" class="btn btn-primary btn-sm">Voir Film</a></td>
                <td><?= $film['title'] ?></td>
                <td><?= $film['type_id'] ?></td>
                <td><?= $film['author'] ?></td>
                <td><?= $film['release_year'] ?></td>
                <td><?= $film['movie_duration'] ?></td>
                <td><?= $film['poster'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>