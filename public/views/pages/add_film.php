<?php ob_start(); ?>

<h1>Ajouter un film</h1>

<form method="post" enctype="multipart/form-data" action="<?= url('add_film') ?>">
    <fieldset>
        <input name="title" type="text" id="title" placeholder="Titre du film"><br><br>
        <select name="type" id="type">
            <?php foreach ($types as $type) : ?>
                <option value="<?= $type['id'] ?>"><?= $type['name'] ?></option>
            <?php endforeach ?>
        </select>
        <label> Type du film </label><br><br>
        <input name="author" type="text" id="author" placeholder="Auteur du film"><br><br>
        <input name="release_year" type="text" id="release_year" placeholder="Année de sortie"><br><br>
        <input name="duration" type="text" id="duration" placeholder="Durée du film"><br><br>
        <input name="poster" type="file"><br><br>
        <input type="submit" id="ajout_film" value="Ajouter"><br><br>
    </fieldset>
</form>
<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>