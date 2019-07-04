<?php

// Create Router instance
$router = new Router();


$router->get('', 'PagesController@home' );


/* Routes pour les usagers */
/* Afficher */
$router->get('/affichage_user', 'UsersController@affichage_user'); // lister tous les usagers
$router->get('/affichage_user/{id}', 'UsersController@show'); //détails d'un usager par id
/* Créer */
$router->get('/add_user','UsersController@add_user'); 


//afficher le formulaire pour ajouter un usager
$router->post('/user', 'UsersController@save'); //gérer l'envoi du formulaire d'ajout d'un usager
/* Modifier */

/* Supprimer */



/* Routes pour les films */
/* Afficher */
$router->get('/affichage_film', 'FilmsController@affichage_film');// lister tous les films
$router->get('/affichage_films/{id}', 'FilmsController@show');//détails d'un film par id

/* Créer */
$router->get('/add_film', 'FilmsController@add_film');//afficher le formulaire pour ajouter un film
$router->post('/film-add', 'FilmsController@save'); //gérer l'envoi du formulaire d'ajout d'un film

/* Modifier */
$router->get('/film-change/{id}', 'FilmsController@change'); //afficher le formulaire pour modifier un film
$router->post('/film-change/{id}', 'FilmsController@saveChange'); //gérer l'envoi du formulaire de modification d'un film

/* Supprimer */
$router->get('/film-delete/{id}', 'FilmsController@delete'); //afficher le formulaire pour modifier un film
$router->post('/film-delete/{id}', 'FilmsController@saveDelete'); //gérer l'envoi du formulaire de modification d'un film


/* Routes pour les vues */
/* Afficher */
$router->get('/vues', 'VuesController@index'); // lister tous les vues
$router->get('/vues/{id}', 'VuesController@show'); //détails d'une vue par id

/* Créer */
$router->get('/vue-add', 'TypesController@add'); //afficher le formulaire pour ajouter une vue
$router->post('/vue-add', 'TypesController@save');//gérer l'envoi du formulaire d'ajout d'une vue
/* Modifier */

/* Supprimer */

/* Routes pour les types (genres) */
/* Afficher */
$router->get('/types', 'TypesController@index'); // lister tous les types
$router->get('/types/{id}', 'TypesController@show'); //détails d'un type par id

/* Créer */
$router->get('/type-add', 'TypesController@add'); //afficher le formulaire pour ajouter un type
$router->post('/type-add', 'TypesController@save');//gérer l'envoi du formulaire d'ajout d'un type

/* Modifier */

/* Supprimer */

// Run it!
$router->run();