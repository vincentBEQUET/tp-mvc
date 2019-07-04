<?php
class FilmsController
{

    public function affichage_film()
    {
        $films = Film::findAll();
        view('films.affichage_films', compact('films'));
    }

    public function show($id)
    {
        $film = Film::findOne($id);
        view('films.affichage_film', compact('film'));
    }






    public function add_film()
    {
        $types = Type::findAll();
        view('pages.add_film', compact('types')); // Recherche des types de film pour le champ type du formulaire de création de film.
    }

    public function save()
    {
        //A faire lorsque les POST soient complets. Entre les guimets du $_POST va nom du champ dans le formulaire

        if (!empty($_POST)) {

            $film = new Film;

            $film->setTitle($_POST['title']);
            $film->setTypeId($_POST['type']);
            $film->setAuthor($_POST['author']);
            $film->setMovieDuration($_POST['movie_duration']);
            $film->setReleaseYear($_POST['release_year']);
            if (isset($_POST['poster']))
            {
                $film->setPoster($_POST['poster']);
            }
            if (isset($_POST['gif']))
            {
                $film->setGif($_POST['gif']);
            }
            $film->save();
        }

        $types = Type::findAll();
        view('pages.add_film', compact('types')); // Recherche des types de film pour le champ type du formulaire de création de film.
    }

}