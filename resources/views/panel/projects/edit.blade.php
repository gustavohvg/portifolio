<x-layout>
    <div class="max-w-2xl space-y-6">

        {{-- Cabeçalho --}}
        <div class="flex items-center gap-4">
            <a href="{{ route('panel.projects.index') }}"
               class="text-slate-400 hover:text-white transition p-1.5 rounded-lg hover:bg-white/5">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </a>
            <div>
                <h1 class="text-2xl font-bold text-white">Editar projeto</h1>
                <p class="text-sm text-slate-400 mt-1">{{ $project->title }}</p>
            </div>
        </div>

        {{-- Formulário --}}
        <form method="POST" action="{{ route('panel.projects.update', $project) }}" class="space-y-5">
            @csrf
            @method('PUT')

            @include('panel.projects._form')

            <div class="flex items-center gap-3 pt-2">
                <button type="submit"
                        class="bg-sky-400 hover:bg-sky-300 text-slate-900 font-medium px-6 py-2.5 rounded-lg text-sm transition">
                    Atualizar projeto
                </button>
                <a href="{{ route('panel.projects.index') }}"
                   class="text-slate-400 hover:text-white text-sm transition">
                    Cancelar
                </a>
            </div>
        </form>

    </div>
</x-layout>
