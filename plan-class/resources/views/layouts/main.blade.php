<!DOCTYPE html>
  <html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="shortcut icon" type="imagex/png" href="{{ asset('img/icon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="./js/scripts.js"></script>
  </head>
  <body>
    @yield('content')
  </body>
</html>
