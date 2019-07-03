<?php ob_start(); ?>

<h1>Ajouter un utilisateur</h1>

<form method="post" action="<?= url('add_user') ?>" enctype="multipart/form-data">
    <fieldset>
        <input name="name" type="text" id="name" placeholder="Nom de l'utilisateur">
        <input name="password" type="password" id="password" placeholder="Mot de passe">
        <input name="mail" type="mail" id="email" placeholder="nom.prenom@gmail.com">
        <input name="" type="date" id="created_at" placeholder="Date de création du compte">
        <input name="avatar" type="file" id="avatar" placeholder="Votre avatar">
        <input type="submit" id="validation" value="Rechercher">
    </fieldset>
</form>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>