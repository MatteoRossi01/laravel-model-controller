<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    {{-- Header --}}
    <header class="header">
        <img src="img/photoroom.png" alt="">
        <span>Ecco la tua lista di film preferiti!!</span>
    </header>
    {{-- Header --}}

    <main>
        @yield('content')
    </main>
</body>
</html>