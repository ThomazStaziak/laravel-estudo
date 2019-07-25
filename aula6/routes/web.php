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
    return view('welcome');
});

Route::get('/paginate/{numero}', 'ActorsController@paginate');

Route::get('notaMaiorQue/{numero}', 'ActorsController@notaMaiorQue');

Route::get('/atoresTerror', 'ActorsController@atoresFilmeDeTerror');

Route::get('/filmes/organizados/nome', 'MoviesController@organizarNome');

Route::get('/filmes/organizados/duracao', 'MoviesController@organizarDuracao');

Route::get('/filmes/organizados/aleatorio', 'MoviesController@organizarAleatoriamente');

Route::get('/filmesMaiorQue90', 'MoviesController@filmesMaiorQue90');

Route::get('/filmesMaiorQue90OuNotaMaiorQue5', 'MoviesController@filmesMaiorQue90OuNotaMaiorQue5');



// Storage
Route::get('/form', function(){
  return view('form');
});
Route::get('/photos', 'FormController@index');
Route::post('/salvar', 'FormController@storage');
