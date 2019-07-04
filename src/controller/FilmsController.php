<?php
class FilmsController
{

    public function affichage_film()
    {
        $films = Film::findAll();
        view('pages.affichage_film', compact('films'));
    }


    public function add_film()
    {
        /*   A faire lorsque les POST soient complets. Entre les guimets du $_POST va nom du champ dans le formulaire
        $film = new Film;

        $film->setTitle($_POST['']);
        $film->setTypeId($_POST['']);
        $film->setAuthor($_POST['']);
        $film->setPoster($_POST['']);
        $film->setReleaseYear($_POST['']);
        $film->setMovieDuration($_POST['']);
        $film->setGif($_POST['']);

        $film->save();
*/
        $types = Type::findAll();
        view('pages.add_film', compact('types')); // Recherche des types de film pour le champ type du formulaire de création de film.
    }

}