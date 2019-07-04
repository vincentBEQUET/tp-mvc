<?php ob_start(); ?>

<h1>Ajouter un film</h1>

<form method="post" enctype="multipart/form-data" action="<?= url('add_film') ?>">
    <fieldset>
        <input type=" text" id="title" placeholder="Titre du film"><br><br>
    <select id="type">
        <?php
        foreach ($types as $type) //Affichage de tous les types.
        {
            echo "<option>" . $type['name'] . "</option>";
        }
        ?>
    </select>
    <label> Type du film </label><br><br>
    <input type="text" id="author" placeholder="Auteur du film"><br><br>
    <input type="text" id="duration" placeholder="Durée du film"><br><br>
    <input type="file" name="photo"><br><br>
    <input type="submit" id="ajout_film" value="Ajouter"><br><br>
    </fieldset>
</form>
<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>