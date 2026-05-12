<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/css/public.css', 'resources/js/public.js'])

    @livewireStyles
</head>

<body>
    @include('partials.header')

    <main>{{ $slot }}</main>

    @livewireScripts
</body>

</html>