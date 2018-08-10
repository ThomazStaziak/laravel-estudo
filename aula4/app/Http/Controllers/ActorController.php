<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;

class ActorController extends Controller
{
    public function add(Request $request)
    {
      $this->validate($request, [
        'first_name' => 'required',
        'last_name' => 'required',
        'rating' => 'required|numeric|max:2'
      ]);

      $ator = Actor::create([
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'rating' => $request->input('rating')
      ]);

      $salvar = $ator->save();

      if ($salvar) {
        return redirect('actors/');
      } else {
        return view('form_ator');
      }
    }

    public function listAll()
    {
      $atores = Actor::all();
      return view('lista_atores')->with('atores', $atores);
    }

    public function showForm($id)
    {
      $ator = Actor::find($id);
      return view('form_edit')->with('ator', $ator);
    }

    public function edit(Request $request, $id)
    {
      $ator = Actor::find($id);
      $ator->first_name = $request->input('first_name');
      $ator->last_name = $request->input('last_name');
      $ator->rating = $request->input('rating');
      $salvar = $ator->save();
      if ($salvar) {
        return redirect('/actors');
      } else {
        return redirect('/actors');
      }
    }

    public function delete($id)
    {
      $ator = Actor::find($id);
      $apagar = $ator->delete();
      if ($apagar) {
        return redirect('/actors');
      } else {
        return redirect('/actors');
      }
    }

    public function apagar($id)
    {
      $ator = Actor::find($id);
      $apagar = $ator->delete();
      if ($apagar) {
        return redirect('/actors');
      } else {
        return redirect('/actors');
      }
    }
}
