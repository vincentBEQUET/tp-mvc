<?php ob_start(); ?>

<h1>Ajouter un film</h1>

<form>
    <fieldset>
        <input type="text" id="title" placeholder="Titre du film">
        <input type=""
        <input type="text" id="name" placeholder="Nom de l'utilisateur">
        <input type="submit" id="ajout_film" value="Ajouter">
    </fieldset>
</form>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>