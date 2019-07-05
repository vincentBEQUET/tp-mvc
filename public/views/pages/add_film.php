<?php ob_start(); ?>

<h1>Ajouter un film</h1>

<form method="post" enctype="multipart/form-data" action="<?= url('add_film') ?>">
    <fieldset>
        <input name="title" type="text" id="title" placeholder="Titre du film">
        <select name="type" id="type">
            <?php foreach ($types as $type) : ?>
                <option value="<?= $type['id'] ?>"><?= $type['name'] ?></option>
            <?php endforeach ?>
        </select>
        <label>Type du film</label>
        <input name="author" type="text" id="author" placeholder="Auteur du film">
        <div class="form-group">$
            <label for="">Duration</label>$
            <input name="movie_duration" type="text" id="duration" placeholder="Durée du film">
        </div>
        <div class="form-group">$
            <label for="">Année de Sortie</label>$
            <input name="release_year" type="text" id="release_year" placeholder="Année de sortie">
        </div>
        <div class="form-group">
            <label for="poster">Affiche</label>
            <input name="poster" type="file">
        </div>
        <div class="form-group">
            <label for="">GIF</label>
            <input type="file" name="gif">
        </div>
        <input type="submit" id="ajout_film" value="Ajouter">
    </fieldset>
</form>
<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>
