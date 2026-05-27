<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config("app.name") }}</title>

    @vite('resources/css/app.css')
</head>
<body>

<x-header>
    @if(isset($userFullName))
        <x-slot:userFullName>{{ $userFullName }}</x-slot:userFullName>
    @endif
</x-header>

<main class="p-6">
    @if ($slot->isEmpty())
        This is default content if the slot is empty.
    @else
        {{ $slot }}
    @endif
</main>

<x-footer></x-footer>

</body>
</html>
