{{-- resources/views/components/footer.blade.php --}}
<footer class="bg-slate-900 border-t border-slate-800 mt-auto">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-6">

        {{-- Grid principal --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-10 border-b border-slate-800">

            {{-- Coluna da marca (ocupa 2 colunas no lg) --}}
            <div class="lg:col-span-2">
                <a href="{{ url('/') }}" class="flex items-center gap-2 text-white font-semibold text-lg tracking-tight w-fit">
                    <span class="w-2 h-2 rounded-full bg-sky-400"></span>
                    {{ config("app.name") }}
                </a>
                <p class="mt-3 text-slate-500 text-sm leading-relaxed max-w-xs">
                    Uma plataforma moderna feita com Laravel e Tailwind CSS.
                </p>

                {{-- Redes sociais --}}
                <div class="flex items-center gap-2 mt-5">
                    <a href="#" aria-label="GitHub"
                       class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-700
                              text-slate-500 hover:text-sky-400 hover:border-sky-400/40 transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844a9.59 9.59 0 012.504.337c1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                        </svg>
                    </a>
                    <a href="#" aria-label="Twitter"
                       class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-700
                              text-slate-500 hover:text-sky-400 hover:border-sky-400/40 transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>
                    <a href="#" aria-label="Instagram"
                       class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-700
                              text-slate-500 hover:text-sky-400 hover:border-sky-400/40 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                            <circle cx="12" cy="12" r="4"/>
                            <circle cx="17.5" cy="6.5" r="0.5" fill="currentColor"/>
                        </svg>
                    </a>
                    <a href="#" aria-label="LinkedIn"
                       class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-700
                              text-slate-500 hover:text-sky-400 hover:border-sky-400/40 transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14m-.5 15.5v-5.3a3.26 3.26 0 00-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 011.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 001.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 00-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Produto --}}
            <div>
                <h3 class="text-slate-400 text-xs font-semibold uppercase tracking-widest mb-4">Produto</h3>
                <ul class="space-y-2.5">
                    <li><a href="{{ url('/') }}" class="text-slate-500 hover:text-slate-200 text-sm transition">Início</a></li>
                    <li><a href="#" class="text-slate-500 hover:text-slate-200 text-sm transition">Funcionalidades</a></li>
                    <li><a href="#" class="text-slate-500 hover:text-slate-200 text-sm transition">Preços</a></li>
                    <li><a href="#" class="text-slate-500 hover:text-slate-200 text-sm transition">Novidades</a></li>
                </ul>
            </div>

            {{-- Suporte --}}
            <div>
                <h3 class="text-slate-400 text-xs font-semibold uppercase tracking-widest mb-4">Suporte</h3>
                <ul class="space-y-2.5">
                    <li><a href="#" class="text-slate-500 hover:text-slate-200 text-sm transition">Documentação</a></li>
                    <li><a href="#" class="text-slate-500 hover:text-slate-200 text-sm transition">FAQ</a></li>
                    <li><a href="#" class="text-slate-500 hover:text-slate-200 text-sm transition">Status</a></li>
                    <li><a href="{{ url('/contato') }}" class="text-slate-500 hover:text-slate-200 text-sm transition">Contato</a></li>
                </ul>
            </div>

            {{-- Empresa --}}
            <div>
                <h3 class="text-slate-400 text-xs font-semibold uppercase tracking-widest mb-4">Empresa</h3>
                <ul class="space-y-2.5">
                    <li><a href="{{ url('/sobre') }}" class="text-slate-500 hover:text-slate-200 text-sm transition">Sobre nós</a></li>
                    <li><a href="#" class="text-slate-500 hover:text-slate-200 text-sm transition">Blog</a></li>
                    <li><a href="#" class="text-slate-500 hover:text-slate-200 text-sm transition">Carreiras</a></li>
                    <li><a href="#" class="text-slate-500 hover:text-slate-200 text-sm transition">Parceiros</a></li>
                </ul>
            </div>

        </div>

        {{-- Rodapé inferior --}}
        <div class="flex flex-col sm:flex-row items-center justify-between gap-3 pt-6">
            <p class="text-slate-600 text-xs">
                &copy; {{ date('Y') }} <span class="text-sky-400">{{ config("app.name") }}</span>. Todos os direitos reservados.
            </p>
            <nav class="flex items-center gap-5">
                <a href="#" class="text-slate-600 hover:text-slate-400 text-xs transition">Privacidade</a>
                <a href="#" class="text-slate-600 hover:text-slate-400 text-xs transition">Termos de uso</a>
                <a href="#" class="text-slate-600 hover:text-slate-400 text-xs transition">Cookies</a>
            </nav>
        </div>

    </div>
</footer>
