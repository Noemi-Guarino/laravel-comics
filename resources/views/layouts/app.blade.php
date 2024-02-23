<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('page-title') | Comics</title>

        {{-- Stili nell'head --}}
        <link rel="stylesheet" href="scss/app.scss">

        {{-- <!-- Includiamo gli assets con la direttiva @vite --> --}}
        @vite('resources/js/app.js')

        @yield('head-imports')
    </head>
    <body class="d-flex flex-column">
    @include('partials.header')

    <main class="flex-grow-1">
        @yield('main-content')
    </main>

    @include('partials.footer')
</body>

</html>
