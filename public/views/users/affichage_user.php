<?php ob_start(); ?>
    <h1><?= $user['name'] ?> : </h1>

    <div>
        <table>
            <tr>
                <th>Avatar</th>
                <th>Nom</th>
                <th>email</th>
                <th>Date de création</th>
            </tr>
            <tr>
                <td><?= $user['avatar'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['created_at'] ?></td>
            </tr>

        </table>
    </div>
    <div>
        <h7>Liste des films vu par <?= $user['name'] ?> : </h7>
        <table>
            <tr class="text-center">
                <th>&nbsp;</th>
                <th>Titre</th>
                <th>Type ID</th>
                <th>Author</th>
                <th>Année</th>
                <th>Duration</th>
                <th>Poster</th>
            </tr>
            <?php foreach ($films as $film) : ?>
                <tr class="text-center">
                    <td><a href="<?= url_film($film['id']) ?>" class="btn btn-primary btn-sm">Voir Film</a></td>
                    <td><?= $film['title'] ?></td>
                    <td><?= $film['type_id'] ?></td>
                    <td><?= $film['author'] ?></td>
                    <td><?= $film['release_year'] ?></td>
                    <td><?= $film['movie_duration'] ?></td>
                    <td><?= $film['poster'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>