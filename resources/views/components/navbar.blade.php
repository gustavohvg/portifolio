{{-- resources/views/components/navbar.blade.php --}}
<nav class="bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            {{-- Logo / Brand --}}
            <a href="{{ url('/') }}" class="flex items-center gap-2 text-white font-semibold text-lg tracking-tight">
                <span class="w-2 h-2 rounded-full bg-sky-400"></span>
                {{ config("app.name") }}
            </a>

            {{-- Links centrais --}}
            <div class="hidden md:flex items-center gap-1">
                <a href="{{ route('site.home') }}" class="text-slate-400 hover:text-white hover:bg-white/5 px-3 py-2 rounded-lg text-sm transition">
                    Início
                </a>
                <a href="{{ route('site.home')  }}" class="text-slate-400 hover:text-white hover:bg-white/5 px-3 py-2 rounded-lg text-sm transition">
                    Sobre
                </a>
                <a href="{{ route('site.home')  }}" class="text-slate-400 hover:text-white hover:bg-white/5 px-3 py-2 rounded-lg text-sm transition">
                    Skills
                </a>
                <a href="{{ route('site.home')  }}" class="text-slate-400 hover:text-white hover:bg-white/5 px-3 py-2 rounded-lg text-sm transition">
                    Projetos
                </a>
                <a href="{{ route('site.home') }}" class="text-slate-400 hover:text-white hover:bg-white/5 px-3 py-2 rounded-lg text-sm transition">
                    Certificados
                </a>
            </div>

            {{-- Ações do lado direito --}}
            <div class="flex items-center gap-3">

                @guest
                    {{-- Visitante --}}
                    <a href="{{ route('site.contact') }}" class="bg-sky-400 hover:bg-sky-300 text-slate-900 font-medium px-4 py-1.5 rounded-lg text-sm transition text-uppercase">
                        Fale comigo
                    </a>
                @endguest

                @auth
                    {{-- Usuário logado — dropdown --}}
                    <div class="relative" x-data="{ open: false }">

                        <button @click="open = !open"
                                class="flex items-center gap-2 px-3 py-1.5 rounded-lg border border-slate-700
                                       bg-white/5 hover:bg-white/10 transition">
                            {{-- Avatar com inicial --}}
                            <span class="w-7 h-7 rounded-full bg-sky-400 flex items-center justify-center
                                         text-slate-900 text-xs font-bold">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) . strtoupper(substr(strrchr(Auth::user()->name, ' '), 1, 1)) }}
                            </span>
                            <span class="text-slate-200 text-sm font-medium">
                                {{ Auth::user()->name }}
                            </span>
                            <svg class="w-4 h-4 text-slate-500 transition-transform duration-200"
                                 :class="{ 'rotate-180': open }"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        {{-- Dropdown panel --}}
                        <div x-show="open"
                             x-cloak
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="opacity-0 -translate-y-1"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 -translate-y-1"
                             @click.outside="open = false"
                             class="absolute right-0 mt-2 w-52 bg-slate-800 border border-slate-700
                                    rounded-xl shadow-xl py-1.5 z-50">

                            {{-- Info do usuário --}}
                            <div class="px-4 py-2.5 border-b border-slate-700 mb-1">
                                <p class="text-xs text-slate-500">Logado como</p>
                                <p class="text-sm text-slate-200 font-medium truncate">
                                    {{ Auth::user()->email }}
                                </p>
                            </div>

                            <a href="{{ route('panel.index') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-slate-400 hover:text-white hover:bg-white/5 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 13m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M13.45 11.55l2.05 -2.05" />
                                    <path d="M6.4 20a9 9 0 1 1 11.2 0z" />
                                </svg>
                                Painel de controle
                            </a>

                            <a href="{{ route('panel.my-account.index') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-slate-400 hover:text-white hover:bg-white/5 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                Meu perfil
                            </a>

                            <div class="border-t border-slate-700 my-1"></div>

                            {{-- Logout via POST --}}
                            <form method="POST" action="{{ route('auth.logout') }}">
                                @csrf
                                <button type="submit" class="w-full flex items-center gap-2 px-4 py-2 text-sm text-red-400 hover:text-red-300 hover:bg-red-400/10 transition text-left">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                    </svg>
                                    Sair
                                </button>
                            </form>
                        </div>
                    </div>
                @endauth

            </div>
        </div>
    </div>
</nav>
