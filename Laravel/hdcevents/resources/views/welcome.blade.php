<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            body {
                font-family: 'Figtree';
            }
        </style>
    @endif
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <h1>Algum título</h1>
    @if (10 > 15)
        <p>A condição é true</p>
    @endif
    <p>{{ $nome }}</p>
    @if ($nome == 'Pedro')
        <p>O nome é Pedro</p>
    @elseif($nome == 'Matheus')
        <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos, e trabalha como {{ $profissao }}</p>
    @else
        <p>O nome não é Pedro</p>
    @endif
</body>

</html>
