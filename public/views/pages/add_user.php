<?php ob_start(); ?>

<h1>Ajouter un utilisateur</h1>

<form method="post" action="<?= url('add_user') ?>" enctype="multipart/form-data">
    <fieldset>
        <input type="text" id="name" placeholder="Nom de l'utilisateur">
        <input type="password" id="password" placeholder="Mot de passe">
        <input type="mail" id="email" placeholder="nom.prenom@gmail.com">
        <input type="date" id="created_at" placeholder="date de crééation du compte">
        <input type="file" id="avatar" placeholder="votre avatar">
        <input type="submit" id="validation" value="Rechercher">
    </fieldset>
</form>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>