<x-layout>
    <h1 class="text-3xl font-bold">Painel de controle</h1>

    @auth
        <p>{{ auth()->user()->name }}</p>
    @endauth
</x-layout>
