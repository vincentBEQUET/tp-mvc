<?php ob_start(); ?>
<?php
//RECUPERATION DES DONNEES
require __DIR__ . '/../../../config/Db.php';
$request = 'SELECT * FROM type';
$response = $bdd->query($request);
$posts = $response->fetchAll(PDO::FETCH_ASSOC);
?>
<h1>Ajouter un film</h1>

<form method="post" enctype="multipart/form-data">
    <fieldset>
        <input type="text" id="title" placeholder="Titre du film">
        <select id="type">
            <?php
            foreach ($posts as $post) //Affichage de tous les types.
            {
                echo "<option>" . $post['name'] . "</option>";
            }
            ?>
        </select>
        <label> Type du film </label>
        <input class="form-control" type="text" id="author" placeholder="Auteur du film">
        <input class="form-control" type="text" id="duration" placeholder="Durée du film">
        <input class="form-control" type="file" name="photo">
        <input class="form-control" type="submit" id="ajout_film" value="Ajouter">
    </fieldset>
</form>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>