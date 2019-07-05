<?php ob_start(); ?>

<h1 class="text-center">Les types de film</h1>
<table class="table">
    <thead>
        <tr class="text-center">
            <th>Nom</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($types as $type) : ?>
            <tr class="text-center">
                <td><?= $type['name'] ?></td>
                <td><a href="<?= url_edit_type($type['id']) ?>"><i class="film-icon fas fa-pen-square"></i></a></td>
                <td><a href="<?= url_delete_type($type['id']) ?>"><i class="film-icon fas fa-trash-alt"></i></a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>