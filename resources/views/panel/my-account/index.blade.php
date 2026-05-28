@php use App\Models\User; @endphp

<x-layout>
    <h1 class="text-3xl font-bold">Minha conta</h1>

    <div></div>
    @auth
        <pre>{{ print_r(User::find(1)) }}</pre>
    @endauth
</x-layout>
