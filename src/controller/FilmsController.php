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
        $vues = Film::film_vue($id);
        
        view('films.affichage_film', compact('film', 'vues'));
        

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
            $film->setPoster($_FILES['poster']);
            $film->setGif($_FILES['gif']);
            
            $film->save();
        }

        $types = Type::findAll();
        view('pages.add_film', compact('types')); // Recherche des types de film pour le champ type du formulaire de création de film.
    }


    public function edit($id)
    {
        $film = Film::findOne($id);
        $types = Type::findAll();

        view('films.edit', compact('film', 'types'));
    }

    public function update($id)
    {
        if (!empty($_POST))
        {
            $film = Film::findOne($id);
            dump($film);
            $film->setTitle($_POST['title']);
            $film->setTypeId($_POST['type']);
            $film->setAuthor($_POST['author']);
            $film->setMovieDuration($_POST['movie_duration']);
            $film->setReleaseYear($_POST['release_year']);
            $film->setPoster($_FILES['poster']);
            $film->setGif($_FILES['gif']);

            $film->update();
        }
    }
}