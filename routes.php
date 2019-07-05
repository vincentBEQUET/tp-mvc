<?php

// Create Router instance
$router = new Router();


$router->get('', 'PagesController@home' );


/* Routes pour les usagers */
/* Afficher */
$router->get('/affichage_users', 'UsersController@affichage_user'); // lister tous les usagers
/* Créer */
$router->get('/add_user','UsersController@add_user'); 


//afficher le formulaire pour ajouter un usager
$router->post('/add_user', 'UsersController@save'); //gérer l'envoi du formulaire d'ajout d'un usager

/* Modifier */
// Formulaire d'update
$router->get('/affichage_user/{id}/edit', 'UsersController@edit');

// Traitement de l'update
$router->post('/affichage_user/{id}/edit', 'UsersController@update');
/* Supprimer   */
$router->get('/affichage_user/{id}/delete', 'UsersController@delete');
$router->get('/affichage_user/{id}', 'UsersController@show'); //détails d'un usager par id, cette ligne doit etre apres les ligens 22 et 25 car sinon le '/edit' ne sera pas pris en compte 



/* Routes pour les films */

/* Modifier */
$router->get('/affichage_film/{id}/edit', 'FilmsController@edit'); //afficher le formulaire pour modifier un film
$router->post('/affichage_film/{id}/edit', 'FilmsController@update'); //gérer l'envoi du formulaire de modification d'un film
// $router->post('/affichage_film/{id}', 'FilmsController@saveEdit'); //gérer l'envoi du formulaire de modification d'un film

/* Supprimer */
$router->get('/affichage_film/{id}/delete', 'FilmsController@delete'); //afficher le formulaire pour modifier un film
$router->post('/affichage_film/{id}/delete', 'FilmsController@saveDelete'); //gérer l'envoi du formulaire de modification d'un film

/* Afficher */
$router->get('/affichage_films', 'FilmsController@affichage_film');// lister tous les films
$router->get('/affichage_film/{id}', 'FilmsController@show');//détails d'un film par id

/* Créer  */
$router->get('/add_film', 'FilmsController@add_film'); //afficher le formulaire pour ajouter un film
$router->post('/add_film', 'FilmsController@save'); //gérer l'envoi du formulaire d'ajout d'un film



/* Routes pour les vues */
/* Afficher */
$router->get('/vues', 'VuesController@index'); // lister tous les vues
$router->get('/vue/{id}', 'VuesController@show'); //détails d'une vue par id

/* Créer */
$router->get('/vue-add', 'TypesController@add'); //afficher le formulaire pour ajouter une vue
$router->post('/vue-add', 'TypesController@save');//gérer l'envoi du formulaire d'ajout d'une vue
/* Modifier */

/* Supprimer */

/* Routes pour les types (genres) */
/* Afficher */
$router->get('/types', 'TypesController@index'); // lister tous les types
$router->get('/type/{id}', 'TypesController@show'); //détails d'un type par id

/* Créer */
$router->get('/type-add', 'TypesController@add'); //afficher le formulaire pour ajouter un type
$router->post('/type-add', 'TypesController@save');//gérer l'envoi du formulaire d'ajout d'un type

/* Modifier */

/* Supprimer */

// Run it!
$router->run();