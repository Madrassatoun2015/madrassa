<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('profils-utilisateurs', 'ProfilsController@indexUtilisateurs');

Route::get('profils-employes', 'ProfilsController@indexEmployes');

Route::get('profils-enseignants', 'ProfilsController@indexEnseignants');

Route::get('planning-filieres', 'PlanningController@indexFilieres');

Route::get('planning-cours', 'PlanningController@indexCours');

Route::get('planning-evenements', 'PlanningController@indexEvenements');

Route::get('absences-enfants', 'AbsencesController@indexEnfants');

Route::get('absences-adultes', 'AbsencesController@indexAdultes');

Route::get('notes', 'NotesController@index');

Route::get('inscription-enfants', 'InscriptionController@indexEnfants');

Route::get('inscription-adultes', 'InscriptionController@indexAdultes');

Route::get('inscription-cotisations', 'InscriptionController@indexCotisations');

Route::get('impressions', 'ImpressionsController@index');

Route::get('reglages-etablissement', 'ReglagesController@indexEtablissement');

Route::get('reglages-bdd', 'ReglagesController@indexBdd');

Route::get('creer/adulte', 'AdulteController@create');

Route::post('store', array('as' => 'adulte.store' , 'uses' => 'AdulteController@store'));

Route::get('store', array('as' => 'adulte.index' , 'uses' => 'AdulteController@index'));

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
