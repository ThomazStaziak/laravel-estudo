<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function storage(Request $request)
    {
      $arquivo = $request->file('arquivo');

      if (empty($arquivo)) {
        abort(400, 'Nenhum arquivo foi enviado');
      }

      // salvando
      $nomePasta = 'uploads';

      $arquivo->storePublicly($nomePasta);

      $caminho = public_path()."\\storage\\$nomePasta";

      $nomeArquivo = $arquivo->getClientOriginalName();

     // movendo
      $arquivo->move($caminho, $nomeArquivo);

      return view('imagem')->with('caminho', $caminho)->with('nomeArquivo', $nomeArquivo)->with('nomePasta', $nomePasta);
    }
}
