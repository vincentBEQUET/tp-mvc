<?php

// PagesController.php

class PagesController 
{
    public function home()
    {
        view('pages.home');
    }
    
    public function affichage_user() 
    {
        view('pages.affichage_user');
    }

    public function add_user()
    {
        /* A faire lorsque les POST soient complets. Entre les guimets du $_POST va nom du champ dans le formulaire
        $user = new User;

        $user->setName($_POST['']);
        $user->setPassword($_POST['']); 
        $user->setEmail($_POST['']); 
        $user->setAvatar($_POST['']); 

        $user->save();
        */
        view('pages.add_user');
    }

    public function affichage_film()
    {
        view('pages.affichage_film');
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

        view('pages.add_film');
    }
    

}