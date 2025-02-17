<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    @stack('css')
</head>
<body>
    <header>

    </header>

    @yield('content')

    @stack('js')

    <footer>

    </footer>
</body>
</html>