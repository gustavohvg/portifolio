{{-- resources/views/components/footer.blade.php --}}
<footer class="bg-slate-900 border-t border-slate-800 mt-auto">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-6">

        {{-- Grid principal --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-10 border-b border-slate-800">

            {{-- Coluna da marca (ocupa 2 colunas no lg) --}}
            <div class="lg:col-span-2">
                <a href="{{ route('site.home') }}" class="flex items-center gap-2 text-white font-semibold text-lg tracking-tight w-fit">
                    <span class="w-2 h-2 rounded-full bg-sky-400"></span>
                    {{ config("app.name") }}
                </a>
                <p class="mt-3 text-slate-500 text-sm leading-relaxed max-w-xs">
                    Uma plataforma moderna feita com Laravel e Tailwind CSS.
                </p>

                {{-- Redes sociais --}}
                <div class="flex items-center gap-2 mt-5">
                    <a href="https://github.com/gustavohvg" aria-label="GitHub" target="_blank"
                       class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-700 text-slate-500 hover:text-sky-400 hover:border-sky-400/40 transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844a9.59 9.59 0 012.504.337c1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/in/gustavohvg/" aria-label="LinkedIn" target="_blank"
                       class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-700
                              text-slate-500 hover:text-sky-400 hover:border-sky-400/40 transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14m-.5 15.5v-5.3a3.26 3.26 0 00-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 011.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 001.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 00-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/>
                        </svg>
                    </a>
                    <a href="mailto:ghvg@bgninfo.com" aria-label="Email" target="_blank"
                       class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-700
                              text-slate-500 hover:text-sky-400 hover:border-sky-400/40 transition">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Produto --}}
            <div class="lg:col-span-3">
                <ul class="lg:text-right space-y-2.5">
                    <li><a href="{{route('site.home')}}" class="text-slate-500 hover:text-slate-200 text-sm transition">Início</a></li>
                    <li><a href="{{route('site.home')}}" class="text-slate-500 hover:text-slate-200 text-sm transition">Sobre</a></li>
                    <li><a href="{{route('site.home')}}" class="text-slate-500 hover:text-slate-200 text-sm transition">Skills</a></li>
                    <li><a href="{{route('site.home')}}" class="text-slate-500 hover:text-slate-200 text-sm transition">Projetos</a></li>
                    <li><a href="{{route('site.home')}}" class="text-slate-500 hover:text-slate-200 text-sm transition">Certificados</a></li>
                    <li><a href="{{route('site.contact')}}" class="text-slate-500 hover:text-slate-200 text-sm transition">Contato</a></li>
                    <li><a href="{{route('login')}}" class="text-slate-500 hover:text-slate-200 text-sm transition">Login</a></li>
                </ul>
            </div>

        </div>

        {{-- Rodapé inferior --}}
        <div class="flex flex-col sm:flex-row items-center justify-between gap-3 pt-6">
            <p class="text-slate-600 text-xs">
                &copy; {{ date('Y') }} <span class="text-sky-400">{{ config("app.name") }}</span>. Todos os direitos reservados.
            </p>
        </div>

    </div>
</footer>
