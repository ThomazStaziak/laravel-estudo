<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Adicionar Filme</title>
</head>
<body>
@if (count($errors) > 0)
  <div class="col-6 m-auto">
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
          <span align="center" class="d-block">{{ $error }}</span>
        @endforeach
    </div>
  </div>
@endif
<h1 align="center">Formulário</h1>
<form method="post" action="{{ url('/actors/add') }}">
  {{-- {{ csrf_field() }} --}}
  {{-- OU --}}
  @csrf
      <div class="form-group col-6 m-auto">
          <label>Nome</label>
          <input type="text" class="form-control" value=" {{ old('first_name') }} " name="first_name"/>
      </div>
      <div class="form-group col-6 m-auto">
          <label>Sobrenome</label>
          <input type="text" class="form-control" value="{{ old('last_name') }}" name="last_name"/>
      </div>
      <div class="form-group col-6 m-auto">
          <label>Classificação</label>
          <input type="text" class="form-control" value="{{ old('rating') }}" name="rating"/>
      </div>
      <br>
      <div class="form-group col-6 m-auto">
        <input type="submit" value="Adicionar Ator" name="submit" class="btn btn-primary"/>
      </div>
    </form>
  </body>
</html>
