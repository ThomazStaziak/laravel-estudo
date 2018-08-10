
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <form action="/form_edit/{{ $ator->id }}" method="post">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="form-group col-6 m-auto">
        <label>Nome</label>
        <input type="text" name="first_name" class="form-control" value="{{ $ator->first_name }}">
      </div>
      <div class="form-group col-6 m-auto">
        <label>Sobrenome</label>
        <input type="text" name="last_name" class="form-control" value="{{ $ator->last_name }}">
      </div>
      <div class="form-group col-6 m-auto">
        <label>Classificação</label>
        <input type="text" name="rating" class="form-control" value="{{ $ator->rating }}">
      </div>
      <br>
      <div class="row col-12">
        <div class="form-group col-3 offset-4">
          <input type="submit" class="btn btn-warning" value="Editar Ator">
        </div>
      </form>
      <form action="/actor/delete/{{ $ator->id }}" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <div class="form-group">
          <input type="submit" name="" class="btn btn-danger text-dark" value="Apagar Ator">
        </div>
      </form>
      </div>
  </body>
</html>
