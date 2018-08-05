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
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

           a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <div class="content">
        @if (Request::is('todosOsAtores'))
          @foreach ($atores as $key => $value)
            <a href="atores/{{$value['id']}}"> {{ $value["first_name"] . " " . $value["last_name"]}} </a>
            <br>
          @endforeach
        @endif
        @if (Request::is('atores/procurar'))
          <div class="title">
            {{ $ator[0]['first_name'] . " " . $ator[0]['last_name'] }}
          </div>
        @endif
        <br>
        <form action="{{ url('atores/procurar') }}" method="post">
          @csrf
          <input type="text" name="nome" value="">
          <input type="submit" name="" value="Enviar">
        </form>
        <br>
        <form action="{{ url('todosOsAtores') }}" method="get">
          <input type="submit" name="" value="Limpar">
        </form>
        <br>
      </div>
    </body>
</html>