<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <title></title>
  </head>
  <body>
    {{ $ator }}
    @foreach ($ator as $key => $value)
        {{ $value->first_name }}
      <br>
    @endforeach
  </body>
</html>
