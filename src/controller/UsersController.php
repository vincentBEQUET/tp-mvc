<?php

class UsersController {

    public function affichage_user()
    {
        $users = User::findAll();
        view('pages.affichage_user', compact('users'));
    }

    public function add_user()
    {
        view('pages.add_user');
    }

    public function save()
    {
        /* A faire lorsque les POST soient complets. Entre les guimets du $_POST va nom du champ dans le formulaire*/
        if (!empty($_POST)) 
        {
            $user = new User;
            
            $user->setName($_POST['name']);
            $user->setPassword($_POST['password']); 
            $user->setEmail($_POST['email']);
            if (isset($_POST['avatar']))
            {
                $user->setAvatar($_POST['avatar']); 
            }
            
            $user->save();
        }
        
        view('pages.add_user');
        
    }
}