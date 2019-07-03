<?php ob_start(); ?>

<h1>Ajouter un utilisateur</h1>

<form>
    <fieldset>
        <input type="text" id="name" placeholder="Nom de l'utilisateur">
        <input type="submit" id="validation" value="Rechercher">
    </fieldset>
</form>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>