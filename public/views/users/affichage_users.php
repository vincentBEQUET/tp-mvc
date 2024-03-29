<?php ob_start(); ?>

<h1>Recherche par utilisateur</h1>

<p>Afficher les utilisateurs: </p><br>
<form method="post" action="<?= url('affichage_users') ?>">
    <fieldset>
        <input type="text" id="name" placeholder="Nom du film">
        <input type="submit" id="validation" value="Rechercher">
    </fieldset>
</form>

<div>
    <table class="table">
        <tr>
            <th>Avatar</th>
            <th>Nom</th>
            <th>email</th>
            <th>Date de création</th>
            <th>Plus d'informations</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user['avatar'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['created_at'] ?></td>
                <td>
                    <a href="<?= url('affichage_user/' . $user['id']) ?>"><i class="film-icon fas fa-hand-point-right"></i></a>
                </td>
                <td>
                    <a href="<?= url('affichage_user/' . $user['id'] . '/edit') ?>"><i class="film-icon fas fa-pen-square"></i></a>
                </td>
                <td>
                    <a href="<?= url('affichage_user/' . $user['id'] . '/delete') ?>"><i class="film-icon fas fa-trash-alt"></i></a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
    <?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>