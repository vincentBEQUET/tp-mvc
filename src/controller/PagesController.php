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
        $users = User::findAll();
        view('pages.affichage_user', compact('users'));
    }

    public function add_user()
    {
        view('pages.add_user');
    }

    public function affichage_film()
    {
        $films = Film::findAll();
        view('pages.affichage_film', compact('films'));
    }

    public function add_film()
    {
        $types = Type::findAll();
        view('pages.add_film', compact('types'));
    }


}