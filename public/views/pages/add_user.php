<?php ob_start(); ?>

<h1>Ajouter un utilisateur</h1>

<form method="post" action="<?= url('add_user') ?>" enctype="multipart/form-data">
    <fieldset>
        <input class="form-control" type="text" id="name" placeholder="Nom de l'utilisateur">
        <input class="form-control" type="password" id="password" placeholder="Mot de passe">
        <input class="form-control" type="mail" id="email" placeholder="nom.prenom@gmail.com">
        <input class="form-control" type="date" id="created_at" placeholder="date de crééation du compte">
        <input class="form-control" type="file" id="avatar" placeholder="votre avatar">
        <input class="form-control" type="submit" id="validation" value="Rechercher">
    </fieldset>
</form>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?> 