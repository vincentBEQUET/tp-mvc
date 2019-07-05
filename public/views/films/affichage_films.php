<?php ob_start(); ?>

<h1 class="text-center">Affichage des films.</h1>
<table class="table">
    <thead>
        <tr class="text-center">
            <th>Poster</th>
            <th>Titre</th>
            <th>Type</th>
            <th>Author</th>
            <th>Année</th>
            <th>Duration</th>
            <th>Détails</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($films as $film) : ?>
            <tr class="text-center">
                <?php if (isset($film['poster'])) : ?>
                    <td><img src="<?= uploads_url($film['poster']) ?>" height="80px" alt="Image Thumbnail"></td>
                <?php else: ?>
                    <td>Ce film n'a toujours pas d'image</td>
                <?php endif; ?>
                <td class="align-middle"><?= $film['title'] ?></td>
                <td class="align-middle"><?= $film['type_id'] ?></td>
                <td class="align-middle"><?= $film['author'] ?></td>
                <td class="align-middle"><?= $film['release_year'] ?></td>
                <td class="align-middle"><?= $film['movie_duration'] ?></td>
                <td class="align-middle"><a href="<?= url_film($film['id']) ?>"><i class="film-icon fas fa-hand-point-right"></i></a></td>
                <td class="align-middle"><a href="<?= url_edit_film($film['id']) ?>"><i class="film-icon fas fa-pen-square"></i></a></td>
                <td class="align-middle"><a href="<?= url_delete_film($film['id']) ?>"><i class="film-icon fas fa-trash-alt"></i></a></td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>


    <?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>