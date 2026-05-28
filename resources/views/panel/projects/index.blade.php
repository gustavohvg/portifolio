<x-layout>
    <div class="space-y-6">

        {{-- Cabeçalho --}}
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-white">Projetos</h1>
                <p class="text-sm text-slate-400 mt-1">Gerencie os projetos do seu portfólio</p>
            </div>
            <a href="{{ route('panel.projects.create') }}"
               class="flex items-center gap-2 bg-sky-400 hover:bg-sky-300 text-slate-900 font-medium px-4 py-2 rounded-lg text-sm transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Novo projeto
            </a>
        </div>

        {{-- Feedback de ações --}}
        @if(session('success'))
            <div class="bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-sm px-4 py-3 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        {{-- Tabela --}}
        <div class="bg-slate-800/50 border border-slate-700 rounded-xl overflow-hidden">
            <table class="w-full text-sm">
                <thead>
                <tr class="border-b border-slate-700 text-slate-400 text-left">
                    <th class="px-6 py-4 font-medium">Projeto</th>
                    <th class="px-6 py-4 font-medium">Tags</th>
                    <th class="px-6 py-4 font-medium">Destaque</th>
                    <th class="px-6 py-4 font-medium">Criado em</th>
                    <th class="px-6 py-4 font-medium text-right">Ações</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-slate-700/50">
                @forelse($projects as $project)
                    <tr class="hover:bg-slate-700/30 transition">

                        {{-- Título + descrição resumida --}}
                        <td class="px-6 py-4">
                            <p class="font-medium text-white">{{ $project->title }}</p>
                            <p class="text-slate-500 text-xs mt-0.5 line-clamp-1">{{ $project->description }}</p>
                        </td>

                        {{-- Tags --}}
                        <td class="px-6 py-4">
                            <div class="flex flex-wrap gap-1">
                                @forelse($project->tags as $tag)
                                    <span class="bg-slate-700 text-slate-300 text-xs px-2 py-0.5 rounded-full">
                                            {{ $tag->name }}
                                        </span>
                                @empty
                                    <span class="text-slate-600 text-xs">—</span>
                                @endforelse
                            </div>
                        </td>

                        {{-- Destaque --}}
                        <td class="px-6 py-4">
                            @if($project->is_featured)
                                <span class="bg-sky-400/10 text-sky-400 text-xs px-2 py-0.5 rounded-full border border-sky-400/20">
                                        Sim
                                    </span>
                            @else
                                <span class="text-slate-600 text-xs">—</span>
                            @endif
                        </td>

                        {{-- Data --}}
                        <td class="px-6 py-4 text-slate-400">
                            {{ $project->created_at->format('d/m/Y') }}
                        </td>

                        {{-- Ações --}}
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-end gap-2">

                                {{-- Editar --}}
                                <a href="{{ route('panel.projects.edit', $project) }}"
                                   class="text-slate-400 hover:text-white transition p-1.5 rounded-lg hover:bg-white/5"
                                   title="Editar">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                    </svg>
                                </a>

                                {{-- Deletar --}}
                                <form method="POST" action="{{ route('panel.projects.destroy', $project) }}"
                                      x-data
                                      @submit.prevent="if(confirm('Tem certeza que deseja remover este projeto?')) $el.submit()">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="text-slate-400 hover:text-red-400 transition p-1.5 rounded-lg hover:bg-red-400/10"
                                            title="Remover">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-12 text-center text-slate-500">
                            Nenhum projeto cadastrado ainda.
                            <a href="{{ route('panel.projects.create') }}" class="text-sky-400 hover:underline ml-1">
                                Criar o primeiro
                            </a>
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        {{-- Paginação --}}
        @if($projects->hasPages())
            <div class="flex justify-end">
                {{ $projects->links() }}
            </div>
        @endif

    </div>
</x-layout>
