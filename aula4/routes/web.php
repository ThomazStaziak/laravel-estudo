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

Route::get('/form/filme', function() {
  return view('form');
});

Route::post('/adicionar', 'MoviesController@adicionar');

Route::get('/form/ator', function() {
  return view('form_ator');
});

Route::post('/actors/add', 'ActorController@add');

Route::get('/actors', 'ActorController@listAll');

Route::get('/showForm/{id}', 'ActorController@showForm');

Route::put('/form_edit/{id}', 'ActorController@edit');

Route::get('/apagar/{id}', 'ActorController@apagar');

Route::delete('/actor/delete/{id}', 'ActorController@delete');
