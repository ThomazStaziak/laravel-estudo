<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;
use App\Movie;
use App\Genre;

class ActorsController extends Controller
{
    public function paginate($numero)
    {
      $ator = Actor::paginate($numero);

      return view('actor')->with('ator', $ator);
    }

    public function notaMaiorQue($numero)
    {
      $rating = Actor::where('rating', '>', $numero)->orderBy('rating', 'DESC')->get();
      foreach ($rating as $key => $value) {
        echo $rating[$key]['first_name'] . " ";
        echo $rating[$key]['rating'];
        echo "<br>";
      }
    }

    public function atoresFilmeDeTerror()
    {
      // $atores = Actor::all();
      $array = [];
      $genero = Genre::where('name', '=', 'Ciencia Ficcao')->get();
      $generoId = $genero[0]['id'];
      $movies = Movie::where('genre_id', '=', $generoId)->get();
      foreach ($movies as $key => $value) {
        $movie = Movie::find($value['id']);
        $atores = $movie->actors()->get();
        foreach ($atores as $key => $value) {
          // var_dump($atores[$key]['first_name'] . " " . $atores[$key]['last_name']);
          // echo "<br>";
          $array[] = [$movie->title => $atores[$key]['first_name'] . " "  . $atores[$key]['last_name']];
        }
      }

      return view('atores')->with('array', $array);
    }
}
