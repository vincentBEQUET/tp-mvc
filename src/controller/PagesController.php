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

    public function affichage_film()
    {
        view('pages.affichage_film');
    }

    public function add_user()
    {
        view('pages.add_user');
    }

    public function add_film()
    {
        view('pages.add_film');
    }
}