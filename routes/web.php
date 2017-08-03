<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//route de la page d'accueil. pas besoin de controller pour lui
Route::get('/', function () {
    return view('accueil');
});

//la route pour afficher la page nouveau projet
Route::get('projet_new', 'ProjetController@projetnew');

//la route de la liste de projets
Route::get('projet_list', 'ProjetController@projetList');

//la route pour afficher la page nouveau stagiaires
Route::get('stage_new', 'ProjetController@stagenew');

//la route de la liste de stagiaires
Route::get('stage_list', 'ProjetController@stageList');

//route pour l'ajour d'un projet. Remarquons que c'est une route post
Route::post('ajout_projet', 'ProjetController@AjouterProjet');
