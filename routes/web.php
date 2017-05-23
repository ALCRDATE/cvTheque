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

Route::get('/', function () {
    return view('start_page');
})->name('/');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homeEntreprise' , 'EspaceController@index')->name('homeEn');
Route::post('/login' , 'Auth\LoginController@login')->name('user.login')->middleware('checkRole');

////////////////////////////////////////////////
Route::get('/espaceEntreprise' , function(){
	return view('/entreprise/espaceEntreprise');
})->name('espaceEntreprise');
Route::get('/espaceEntreprise/coordonnees' , function(){
	return view('/entreprise/coordonnees');
})->name('entreprise.coordonnees');
Route::get('/espaceEntreprise/formulaire' , function(){
	return view('/entreprise/form_entreprise');
});
Route::get('/home/coordonnee' , function(){
	return view('/entreprise/home_coordonnee');
})->name('coordonnee');
Route::get('/home/coordonnee/modifier' , function(){
	return view('/entreprise/coordonnee_modifier');
})->name('coordonnee.modifier');
Route::get('/home/annonce' , function(){
	return view('/entreprise/home_annonce');
})->name('annonce');
///////////////////////////////////////////////
Route::get('/espaceCondidat' , function(){
	return view('/espaceCondidat');
})->name('espaceCondidat');

Route::post('/insert' , 'Controller@insert');
Route::post('/insertDomaine/{idEn}', 'Controller@insertDomaine');
Route::post('/modifierCoordonnee/' , 'EntrepriseController@update')->name('modifierCoordonnee');
Route::post('/ajouterCoordonnee' , 'EntrepriseController@store')->name('storeCoordonnee');
Route::post('/ajouterAnnonce' , 'AnnonceController@store')->name('storeAnnonce');
Route::get('/supprimerAnnonce/{$ida}' , 'AnnonceController@destroy')->name('destroyAnnonce');