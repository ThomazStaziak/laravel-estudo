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

Route::get('/genre/{id}', 'GenreController@show');

Route::post('/adicionar', 'MoviesController@adicionar');

Route::get('/form/filme/', 'MoviesController@showForm');

Route::get('/todosOsFilmes', 'MoviesController@showFilmes');
