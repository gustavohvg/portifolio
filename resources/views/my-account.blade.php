<x-layout>
    <h1 class="text-3xl font-bold">Minha conta</h1>

    @auth
        <p>{{ auth()->user()->name }}</p>
    @endauth
</x-layout>
