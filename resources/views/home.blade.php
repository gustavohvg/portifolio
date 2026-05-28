<x-layout style="background:#0f172a; padding: 0;" class="text-slate-100 flex flex-col min-h-screen">
    @push('styles')
        <style>
            body {
                background-color: #0f172a;
                color: #e2e8f0;
            }
            main {
                padding: 0;
            }
        </style>
    @endpush
        <!-- HERO -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_60%_50%_at_80%_10%,rgba(56,189,248,0.07),transparent)] pointer-events-none"></div>
        <section class="relative overflow-hidden px-5 py-16 sm:py-24">
            <div class="max-w-4xl mx-auto">

                <div class="inline-flex items-center gap-2 bg-sky-400/10 border border-sky-400/30 rounded-full px-4 py-1.5 text-xs text-sky-400 uppercase tracking-widest mb-6">
                    <span class="w-1.5 h-1.5 rounded-full bg-sky-400 animate-pulse"></span>
                    Disponível para projetos
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-50 leading-tight tracking-tight" style="font-family:'Syne',sans-serif">
                    Desenvolvedor<br><span class="text-sky-400">Full Stack</span> Web
                </h1>

                <p class="mt-4 text-slate-500 text-sm sm:text-base max-w-md leading-relaxed font-light">
                    Construindo sistemas web e SaaS desde 2018 — do banco de dados à interface,
                    com foco em performance e boa experiência.
                </p>

                <div class="flex flex-wrap items-center gap-3 mt-8">
                    <a href="mailto:ghvg.info@gmail.com"
                       class="inline-flex items-center gap-2 bg-sky-400 hover:bg-sky-300 text-slate-900 font-medium text-sm px-5 py-2.5 rounded-lg transition">
                        <i class="ti ti-mail" aria-hidden="true"></i> Fale comigo
                    </a>
                    <a href="https://linkedin.com/in/gustavohvg/" target="_blank"
                       class="inline-flex items-center gap-2 border border-slate-700 hover:border-slate-500 text-slate-400 hover:text-slate-200 text-sm px-5 py-2.5 rounded-lg transition">
                        <i class="ti ti-brand-linkedin" aria-hidden="true"></i> LinkedIn
                    </a>
                </div>

                <div class="flex flex-wrap gap-6 mt-12">
                    @foreach([['7+', 'Anos de exp.'], ['10+', 'Projetos'], ['2', 'SaaS ativos']] as [$n, $l])
                        <div class="border-l-2 border-sky-400/20 pl-4">
                            <p class="text-2xl sm:text-3xl font-extrabold text-slate-50" style="font-family:'Syne',sans-serif">{{ $n }}</p>
                            <p class="text-xs text-slate-500 uppercase tracking-wide mt-1">{{ $l }}</p>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>

        <hr class="border-slate-800 mx-5">

        <!-- SOBRE -->
        <section class="px-5 py-14">
            <div class="max-w-4xl mx-auto">
                <p class="text-xs text-sky-400 uppercase tracking-widest mb-2">Sobre mim</p>
                <h2 class="text-2xl font-extrabold text-slate-50 tracking-tight mb-7" style="font-family:'Syne',sans-serif">Um pouco da minha história</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div class="sm:col-span-2 bg-white/[.03] border border-slate-800 rounded-xl p-5">
                        <p class="text-sm text-slate-500 leading-relaxed font-light">
                            Comecei a programar em <span class="text-slate-300 font-medium">2018</span> e nunca parei.
                            Sou autodidata por natureza — aprendo rápido e gosto de entender como as coisas funcionam de verdade.
                            Tenho experiência com todo o ciclo de desenvolvimento: da modelagem do banco de dados à entrega de
                            uma interface responsiva. Atualmente desenvolvo o <span class="text-slate-300 font-medium">Assist4us</span>,
                            um SaaS de automação de atendimento via WhatsApp com IA.
                        </p>
                    </div>
                    <div class="bg-white/[.03] border border-slate-800 rounded-xl p-5 text-sm text-slate-500">
                        <span class="text-slate-300 font-medium block mb-1">Localização</span>Barueri, SP — Brasil
                    </div>
                    <div class="bg-white/[.03] border border-slate-800 rounded-xl p-5 text-sm text-slate-500">
                        <span class="text-slate-300 font-medium block mb-1">Idiomas</span>Português nativo · Inglês intermediário
                    </div>
                </div>
            </div>
        </section>

        <hr class="border-slate-800 mx-5">

        <!-- SKILLS -->
        <section class="px-5 py-14">
            <div class="max-w-4xl mx-auto">
                <p class="text-xs text-sky-400 uppercase tracking-widest mb-2">Competências</p>
                <h2 class="text-2xl font-extrabold text-slate-50 tracking-tight mb-7" style="font-family:'Syne',sans-serif">Tecnologias & ferramentas</h2>

                <div class="flex flex-wrap gap-2">
                    @foreach(['PHP 8','Laravel','MySQL','JavaScript','HTML & CSS','APIs REST','jQuery','AJAX','Bootstrap','Tailwind CSS','MariaDB','Git & GitHub','WordPress','React','n8n','OpenAI API','WhatsApp API (Meta)','Figma','UX & UI Design','Arquitetura de software','SaaS','Cron Job','Hospedagem'] as $skill)
                        <span class="bg-white/[.04] hover:bg-sky-400/10 hover:text-sky-400 border border-slate-800 hover:border-sky-400/30 text-slate-500 text-xs px-3.5 py-1.5 rounded-full transition cursor-default">
                {{ $skill }}
            </span>
                    @endforeach
                </div>
            </div>
        </section>

        <hr class="border-slate-800 mx-5">

        <!-- PROJETOS -->
        <section class="px-5 py-14">
            <div class="max-w-4xl mx-auto">
                <p class="text-xs text-sky-400 uppercase tracking-widest mb-2">Projetos</p>
                <h2 class="text-2xl font-extrabold text-slate-50 tracking-tight mb-7" style="font-family:'Syne',sans-serif">O que já construí</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

                    <div class="bg-sky-400/[.04] border border-sky-400/20 rounded-2xl p-5 flex flex-col gap-3">
                <span class="inline-flex items-center gap-1.5 bg-sky-400/10 border border-sky-400/25 text-sky-400 text-xs px-2.5 py-1 rounded-full w-fit">
                    <span class="w-1.5 h-1.5 rounded-full bg-sky-400"></span> Em andamento
                </span>
                        <h3 class="text-base font-bold text-slate-50" style="font-family:'Syne',sans-serif">Assist4us</h3>
                        <p class="text-xs text-slate-500 leading-relaxed flex-1">SaaS de automação de atendimento via WhatsApp com IA. Assistentes personalizados, gerenciamento em tempo real e integração com OpenAI e API oficial do WhatsApp (Meta).</p>
                        <div class="flex flex-wrap gap-1.5">
                            @foreach(['PHP 8','MySQL','OpenAI','WhatsApp API'] as $t)
                                <span class="bg-white/5 text-slate-500 text-xs px-2 py-0.5 rounded">{{ $t }}</span>
                            @endforeach
                        </div>
                        <a href="https://site.assist4us.com/" target="_blank" class="inline-flex items-center gap-1 text-xs text-sky-400 opacity-75 hover:opacity-100 transition">
                            <i class="ti ti-external-link" aria-hidden="true"></i> site.assist4us.com
                        </a>
                    </div>

                    <div class="bg-white/[.03] border border-slate-800 rounded-2xl p-5 flex flex-col gap-3">
                        <h3 class="text-base font-bold text-slate-50" style="font-family:'Syne',sans-serif">ProsperAI</h3>
                        <p class="text-xs text-slate-500 leading-relaxed flex-1">Assistente financeiro via WhatsApp com ChatGPT. Assinaturas recorrentes com Asaas, cobranças e emissão de notas fiscais automáticas.</p>
                        <div class="flex flex-wrap gap-1.5">
                            @foreach(['PHP','ChatGPT','Asaas','WhatsApp'] as $t)
                                <span class="bg-white/5 text-slate-500 text-xs px-2 py-0.5 rounded">{{ $t }}</span>
                            @endforeach
                        </div>
                        <a href="https://prosperai.net/" target="_blank" class="inline-flex items-center gap-1 text-xs text-sky-400 opacity-75 hover:opacity-100 transition">
                            <i class="ti ti-external-link" aria-hidden="true"></i> prosperai.net
                        </a>
                    </div>

                    <div class="bg-white/[.03] border border-slate-800 rounded-2xl p-5 flex flex-col gap-3">
                        <h3 class="text-base font-bold text-slate-50" style="font-family:'Syne',sans-serif">Vitrine Beautycare Brazil</h3>
                        <p class="text-xs text-slate-500 leading-relaxed flex-1">Sistema de cadastro de empresas expositoras com importação/exportação de dados e geração de relatórios.</p>
                        <div class="flex flex-wrap gap-1.5">
                            @foreach(['PHP','MySQL','Bootstrap','jQuery'] as $t)
                                <span class="bg-white/5 text-slate-500 text-xs px-2 py-0.5 rounded">{{ $t }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div class="bg-white/[.03] border border-slate-800 rounded-2xl p-5 flex flex-col gap-3">
                        <h3 class="text-base font-bold text-slate-50" style="font-family:'Syne',sans-serif">Gestão de Projetos — ODATA</h3>
                        <p class="text-xs text-slate-500 leading-relaxed flex-1">Sistema intranet web completo para gestão de projetos internos, desenvolvido e mantido por 2 anos.</p>
                        <div class="flex flex-wrap gap-1.5">
                            @foreach(['PHP','MySQL','JavaScript'] as $t)
                                <span class="bg-white/5 text-slate-500 text-xs px-2 py-0.5 rounded">{{ $t }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div class="bg-white/[.03] border border-slate-800 rounded-2xl p-5 flex flex-col gap-3">
                        <h3 class="text-base font-bold text-slate-50" style="font-family:'Syne',sans-serif">Grupo JMA</h3>
                        <p class="text-xs text-slate-500 leading-relaxed flex-1">Site institucional responsivo com foco em performance e apresentação da empresa.</p>
                        <div class="flex flex-wrap gap-1.5">
                            @foreach(['HTML','CSS','JavaScript'] as $t)
                                <span class="bg-white/5 text-slate-500 text-xs px-2 py-0.5 rounded">{{ $t }}</span>
                            @endforeach
                        </div>
                        <a href="https://gjma.com.br/" target="_blank" class="inline-flex items-center gap-1 text-xs text-sky-400 opacity-75 hover:opacity-100 transition">
                            <i class="ti ti-external-link" aria-hidden="true"></i> gjma.com.br
                        </a>
                    </div>

                    <div class="bg-white/[.03] border border-slate-800 rounded-2xl p-5 flex flex-col gap-3">
                        <h3 class="text-base font-bold text-slate-50" style="font-family:'Syne',sans-serif">EHS ODATA Colocation</h3>
                        <p class="text-xs text-slate-500 leading-relaxed flex-1">Sistema web responsivo de pesquisa interna corporativa com foco em usabilidade e performance.</p>
                        <div class="flex flex-wrap gap-1.5">
                            @foreach(['PHP','MySQL','JavaScript'] as $t)
                                <span class="bg-white/5 text-slate-500 text-xs px-2 py-0.5 rounded">{{ $t }}</span>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <hr class="border-slate-800 mx-5">

        <!-- EXPERIÊNCIA -->
        <section class="px-5 py-14">
            <div class="max-w-4xl mx-auto">
                <p class="text-xs text-sky-400 uppercase tracking-widest mb-2">Experiência</p>
                <h2 class="text-2xl font-extrabold text-slate-50 tracking-tight mb-7" style="font-family:'Syne',sans-serif">Trajetória profissional</h2>

                <div class="divide-y divide-slate-800">
                    @foreach([
                        ['2024 — atual',         'Autônomo / Freelancer',      'Desenvolvedor Full Stack',  'Desenvolvimento de SaaS, sites e aplicações web. Gestão completa do projeto, do levantamento de requisitos à entrega.'],
                        ['fev — jul 2024',       'Basoft',                     'Desenvolvedor WordPress',   'Desenvolvimento e customização de sites com WordPress para criadores de conteúdo digital.'],
                        ['dez 2023 — fev 2024',  'EHS ODATA Colocation',       'Desenvolvedor Full Stack',  'Sistema web responsivo de pesquisa interna corporativa, do back-end ao front-end.'],
                        ['jun 2018 — atual',     'Projetos independentes',     'Desenvolvedor Full Stack',  'Mais de 10 projetos entregues — sistemas web, sites e SaaS para clientes de diversos segmentos.'],
                    ] as [$period, $company, $role, $desc])
                        <div class="grid grid-cols-1 sm:grid-cols-[140px_1fr] gap-1 sm:gap-6 py-5">
                            <p class="text-xs text-slate-500 sm:pt-0.5">{{ $period }}</p>
                            <div>
                                <p class="font-bold text-slate-50 text-sm" style="font-family:'Syne',sans-serif">{{ $company }}</p>
                                <p class="text-xs text-sky-400 mt-0.5 mb-2">{{ $role }}</p>
                                <p class="text-xs text-slate-500 leading-relaxed">{{ $desc }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <hr class="border-slate-800 mx-5">

        <!-- EDUCAÇÃO -->
        <section class="px-5 py-14">
            <div class="max-w-4xl mx-auto">
                <p class="text-xs text-sky-400 uppercase tracking-widest mb-2">Educação</p>
                <h2 class="text-2xl font-extrabold text-slate-50 tracking-tight mb-7" style="font-family:'Syne',sans-serif">Formação</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
                    @foreach([
                        ['ti-school',      'Análise e Desenvolvimento de Sistemas', 'Universidade Paulista', '2020 — 2023'],
                        ['ti-palette',     'Design UX/UI',                          'CoderHouse',            '2023'],
                        ['ti-brand-react', 'React de A-Z',                          'Udemy',                 '2019'],
                        ['ti-code',        'Desenvolvimento Web Completo',           'Udemy',                 '2018'],
                    ] as [$icon, $name, $inst, $year])
                        <div class="bg-white/[.03] border border-slate-800 rounded-xl p-4">
                            <i class="ti {{ $icon }} text-sky-400 text-lg mb-2 block" aria-hidden="true"></i>
                            <p class="text-sm font-medium text-slate-300 leading-snug mb-1">{{ $name }}</p>
                            <p class="text-xs text-slate-500">{{ $inst }}</p>
                            <p class="text-xs text-sky-400 mt-1.5">{{ $year }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <hr class="border-slate-800 mx-5">

        <!-- CONTATO -->
        <section class="px-5 py-14">
            <div class="max-w-4xl mx-auto">
                <p class="text-xs text-sky-400 uppercase tracking-widest mb-2">Contato</p>
                <h2 class="text-2xl font-extrabold text-slate-50 tracking-tight mb-7" style="font-family:'Syne',sans-serif">Vamos conversar?</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    @foreach([
                        ['ti-mail',           'mailto:ghvg.info@gmail.com',              'E-mail',      'ghvg.info@gmail.com',  true],
                        ['ti-brand-linkedin', 'https://linkedin.com/in/gustavohvg/',     'LinkedIn',    'gustavohvg',           true],
                        ['ti-phone',          'tel:+5511992706644',                      'WhatsApp',    '(11) 99270-6644',      true],
                        ['ti-map-pin',        null,                                       'Localização', 'Barueri, SP — Brasil', false],
                    ] as [$icon, $href, $label, $value, $isLink])

                        @if($isLink)
                            <a href="{{ $href }}" {{ str_starts_with($href, 'http') ? 'target=_blank' : '' }}
                            class="flex items-center gap-3 bg-white/[.03] hover:bg-sky-400/[.06] border border-slate-800 hover:border-sky-400/25 rounded-xl p-4 transition min-w-0">
                                @else
                                    <div class="flex items-center gap-3 bg-white/[.03] border border-slate-800 rounded-xl p-4 min-w-0">
                                        @endif
                                        <div class="w-9 h-9 flex-shrink-0 rounded-lg bg-sky-400/10 flex items-center justify-center text-sky-400">
                                            <i class="ti {{ $icon }} text-base" aria-hidden="true"></i>
                                        </div>
                                        <div class="min-w-0">
                                            <p class="text-xs text-slate-500 uppercase tracking-wide">{{ $label }}</p>
                                            <p class="text-sm text-slate-200 mt-0.5 truncate">{{ $value }}</p>
                                        </div>
                                    @if($isLink)</a>@else</div>@endif

                @endforeach
            </div>
            </div>
        </section>

</x-layout>
