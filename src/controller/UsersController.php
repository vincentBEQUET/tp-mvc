<?php

class UsersController {

    public function affichage_user()
    {
        $users = User::findAll();
        view('pages.affichage_user', compact('users'));
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

}