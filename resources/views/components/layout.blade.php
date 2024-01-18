<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-4">
        <div class="d-flex d-flex justify-content-between align-items-center">
            <h1>{{ $title }}</h1>
            @if ($title != "Home page")
            <a href="{{ route('home.page') }}" class="btn btn-outline-secondary btn-sm">Tela Inicial</a>
            @endif
        </div>

        {{ $slot }}
    </div>
</body>
</html>
