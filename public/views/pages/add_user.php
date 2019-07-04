<?php ob_start(); ?>

<h1>Ajouter un utilisateur</h1>

<form method="post" action="<?= url('add_user') ?>" enctype="multipart/form-data">
    <fieldset>
        <input name="name" class="form-control" type="text" id="name" placeholder="Nom de l'utilisateur">
        <input name="password" class="form-control" type="password" id="password" placeholder="Mot de passe">
        <input name="email" class="form-control" type="mail" id="email" placeholder="nom.prenom@gmail.com">
        <input name="avatar" class="form-control" type="file" id="avatar" placeholder="Votre avatar">
        <input class="form-control" type="submit" id="validation" value="Enregistrer">
    </fieldset>
</form>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?> 