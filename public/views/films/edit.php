<?php ob_start(); ?>

<h1 class="text-center">Modifier un film</h1>

<form method="post" enctype="multipart/form-data" action="<?= url_edit_film($film->getId()) ?>">
    <div class="form-group">
        <label for="title">Titre</label>
        <input value="<?= $film->getTitle() ?>" class="form-control" name="title" type="text" id="title">
    </div>
    <div class="form-group">
        <label for="">Type de film</label>
        <select name="type" id="type">
            <?php foreach ($types as $type) :

                $selected = "";

                if ($type['id'] == $film->getTypeId()) $selected = "selected";
                ?>

                <option value="<?= $type['id'] ?>" <?= $selected ?>><?= $type['name'] ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="form-group">
        <label for="author">Auteur</label>
        <input value="<?= $film->getAuthor() ?>" class="form-control" name="author" type="text" id="author">
    </div>
    <div class="form-group">
        <label for="duration">Duration (en secondes)</label>
        <input value="<?= $film->getMovieDuration() ?>" class="form-control" name="movie_duration" type="text" id="duration">
    </div>
    <div class="form-group">
        <label for="release_year">Année de sortie</label>
        <input value="<?= $film->getReleaseYear() ?>" class="form-control" name="release_year" type="text" id="release_year">
    </div>
    <div class="form-group">
        <?php if (null !== $film->getPoster()) : ?>
            <label class="d-block" for="poster">Image Actuelle</label>
            <img src="<?= uploads_url($film->getPoster()) ?>" height="60px" alt="Image du film" />
        <?php else : ?>
            <label for="poster">Ce film n'a toujours pas d'image.</label>
        <?php endif; ?>
        <input class="d-block my-2" name="poster" type="file" id="poster">
    </div>
    <div class="form-group">
        <?php if (null !== $film->getGif()) : ?>
            <label class="d-block" for="gif">GIF Actuelle</label>
            <img src="<?= uploads_url($film->getGif()) ?>" height="60px" alt="Image du film" />
        <?php else : ?>
            <label for="gif">Ce film n'a toujours pas d'image.</label>
        <?php endif; ?>
        <input class="d-block my-2" name="gif" type="file" id="gif">
    </div>
    <input type="submit" class="btn btn-success" id="edit_film" value="Enregistrer">
</form>
<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>