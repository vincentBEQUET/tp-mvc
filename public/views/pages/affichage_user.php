<?php ob_start(); ?>

<h1>Affichage des utilisateurs</h1>

<p>Afficher les utilisateurs par film vu: </p><br>
<form>
    <fieldset>
        <input type="text" id="name" placeholder="Nom du film">
        <input type="submit" id="validation" value="Rechercher">
    </fieldset>
</form>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>