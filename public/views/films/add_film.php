<?php ob_start(); ?>

<h1>Ajouter un film</h1>

<form method="post" enctype="multipart/form-data" action="<?= url('add_film') ?>">
        <div class="form-group">
            <label for="">Titre</label>
            <input class="form-control" name="title" type="text" id="title" placeholder="Titre du film">
        </div>
        <select name="type" id="type">
            <?php foreach ($types as $type) : ?>
                <option value="<?= $type['id'] ?>"><?= $type['name'] ?></option>
            <?php endforeach ?>
        </select>
        <label>Type du film</label>
        <div class="form-group">
            <label for="">Auteur</label>
            <input class="form-control" name="author" type="text" id="author" placeholder="Auteur du film">
        </div>
        <div class="form-group">
            <label for="">Duration</label>
            <input class="form-control" name="movie_duration" type="text" id="duration" placeholder="Durée du film">
        </div>
        <div class="form-group">
            <label for="">Année de Sortie</label>
            <input class="form-control" name="release_year" type="text" id="release_year" placeholder="Année de sortie">
        </div>
        <div class="form-group">
            <label for="poster">Affiche</label>
            <input name="poster" type="file">
        </div>
        <div class="form-group">
            <label for="">GIF</label>
            <input type="file" name="gif">
        </div>
        <input class="btn btn-primary" type="submit" id="ajout_film" value="Ajouter">
</form>
<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>
