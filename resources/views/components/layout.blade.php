<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config("app.name") }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
</head>
<body style="display: flex; flex-direction: column; min-height: 100dvh;">

<x-navbar style="flex: 0"/>

<main class="w-full max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8" style="flex: 1;">
    @if ($slot->isEmpty())
        This is default content if the slot is empty.
    @else
        {{ $slot }}
    @endif
</main>

<x-footer style="flex: 0"/>

@stack('scripts')
</body>
</html>
