<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MoviesController extends Controller
{
    public function  organizarNome()
    {
      $filmes = Movie::all();

      $filmes = collect($filmes);

      $filmes = $filmes->sortBy('title');

      return view('filmes')->with('filmes', $filmes);
    }

    public function  organizarDuracao()
    {
      $filmes = Movie::all();

      $filmes = collect($filmes);

      $filmes = $filmes->sortBy('length');

      return view('filmes')->with('filmes', $filmes);
    }

    public function  organizarAleatoriamente()
    {
      $filmes = Movie::all();

      $filmes = collect($filmes);

      $filmes = $filmes->shuffle();

      return view('filmes')->with('filmes', $filmes);
    }

    public function filmesMaiorQue90()
    {
      $filmes = Movie::all();

      $filmes = collect($filmes);

      $filmes = $filmes->filter(function($value){
        return $value->length > 90;
      });

      $filmes = $filmes->all();

      return view('filmes')->with('filmes', $filmes);
    }

    public function filmesMaiorQue90OuNotaMaiorQue5()
    {
      $filmes = Movie::all();

      $filmes = collect($filmes);

      $filmes = $filmes->filter(function($value){
        return $value->length > 90 || $value->rating > 5;
      });

      $filmes = $filmes->all();

      return view('filmes')->with('filmes', $filmes);
    }
}
