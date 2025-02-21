<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    @stack('css')
    {{-- con stack se juntan codigos en uno solo --}}
</head>
<body>
    <header>

    </header>
    {{-- se usa para definir secciones de una plantilla y permitir que las vistas  hijas las reemplacen con su propio contenido --}}
    @yield('content')

    @stack('js')

    <footer>

    </footer>
</body>
</html>