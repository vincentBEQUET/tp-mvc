<?php

class UsersController {

    public function affichage_user()
    {
        $users = User::findAll();
        view('users.affichage_users', compact('users'));//compact('users) permet d'afficher $users = User::findAll() et User de User::findAll correspond à User de User.php;
    }

    public function show($id)
    {
        $user = User::findOne($id);
        $films = User::user_vue($id);
        view('users.affichage_user', compact('user', 'films'));
    }
/*
    public function user_vu()
    {
        $Films = User:: user_vue();
        view('users.affichage_user', compact('films'));
    }
*/
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
    
    public function edit($id){
        $user = User::findOne($id);

        view('pages.edit', compact('user'));
    }

    public function update($id){
        $user = User::findOne($id); /* User en vert correspond à User du fichier 'User'.php*/
        $user->setName($_POST['name']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $user->update();

        redirectTo('/affichage_user/' . $id);
    }

    public function delete($id){
        $user = User::findOne($id);
        $user->delete();//ici delete doit correspondre à la fonction delete dans le model User.php

        // On redirige vers la liste des étudiants
        //Header('Location: ' . url('user'));
        redirectTo('affichage_users/');
    }
}