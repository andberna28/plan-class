<!DOCTYPE html>
  <html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="./js/scripts.js"></script>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="box">
          <h1>Sistema de Livros</h1>
        </div>
      </div>
    </header>
    @yield('content')
  </body>
</html>
