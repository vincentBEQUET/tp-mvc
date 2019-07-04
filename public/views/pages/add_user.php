<?php ob_start(); ?>

<h1>Ajouter un utilisateur</h1>

<form method="post" action="<?= url('add_user') ?>" enctype="multipart/form-data">
    <fieldset>
        <input class="form-control" type="text" name="name" placeholder="Nom de l'utilisateur">
        <input class="form-control" type="password" name="password" placeholder="Mot de passe">
        <input class="form-control" type="mail" name="email" placeholder="nom.prenom@gmail.com">
        <input class="form-control" type="file" name="avatar" placeholder="votre avatar">
        <input class="form-control" type="submit" name="validation" value="Valider">
    </fieldset>
</form>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?> 