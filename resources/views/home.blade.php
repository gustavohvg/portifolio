<x-layout>
    @if(isset($userFullName))
        <x-slot:userFullName>{{ $userFullName }}</x-slot:userFullName>
    @endif



</x-layout>
