<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            .content {
                text-align: center;
            }
        </style>
    </head>
    <body>
      <div class="content">
        @foreach ($atores as $key => $value)
          {{ $value["first_name"] . " " . $value["last_name"]}}
          <a href="/showForm/{{ $value['id'] }}">Editar</a> | <a href="/apagar/{{ $value['id'] }}">Apagar</a>
          <br>
        @endforeach
        <br>
      </div>
    </body>
</html>
