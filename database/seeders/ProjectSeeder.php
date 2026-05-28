<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $user = User::first();

        $projects = [
            [
                'title'         => 'Portfólio Pessoal',
                'description'   => 'Site de portfólio pessoal desenvolvido com Laravel 13, Tailwind CSS e JavaScript. Conta com painel administrativo para gerenciar projetos, skills e certificados.',
                'github_url'    => 'https://github.com/gustavohvg/portifolio',
                'demo_url'      => null,
                'thumbnail_url' => null,
                'is_featured'   => true,
                'tags'          => ['Laravel', 'PHP', 'Tailwind CSS', 'JavaScript', 'MySQL'],
            ],
            [
                'title'         => 'Assist4us',
                'description'   => 'Sistema SaaS de automação de atendimento via WhatsApp com uso de inteligência artificial. Implementação de APIs REST em PHP 8, integração com API oficial do WhatsApp (Meta) e OpenAI, gerenciamento de conversas em tempo real, automação de fluxos, envio de notificações e controle de eventos. Arquitetura voltada para escalabilidade e manutenção.',
                'github_url'    => null,
                'demo_url'      => 'https://site.assist4us.com/',
                'thumbnail_url' => null,
                'is_featured'   => true,
                'tags'          => ['PHP', 'MySQL', 'API REST', 'WhatsApp API', 'Inteligência Artificial', 'SaaS'],
            ],
            [
                'title'         => 'ProsperAI',
                'description'   => 'Sistema de assinatura que utiliza a plataforma Asaas para gerenciar cobranças recorrentes, pagamentos e emissão de notas fiscais. Funciona como um assistente financeiro via WhatsApp integrado com inteligência artificial (ChatGPT), que organiza, analisa e responde automaticamente sobre finanças pessoais.',
                'github_url'    => null,
                'demo_url'      => 'https://prosperai.net/',
                'thumbnail_url' => null,
                'is_featured'   => true,
                'tags'          => ['PHP', 'MySQL', 'API REST', 'WhatsApp API', 'Inteligência Artificial', 'SaaS'],
            ],
            [
                'title'         => 'Portfólio Pessoal',
                'description'   => 'Site de portfólio pessoal desenvolvido com Laravel 13, Tailwind CSS e Alpine.js. Conta com painel administrativo para gerenciar projetos, skills e certificados.',
                'github_url'    => 'https://github.com/gustavohvg/portifolio',
                'demo_url'      => null,
                'thumbnail_url' => null,
                'is_featured'   => true,
                'tags'          => ['Laravel', 'PHP', 'Tailwind CSS', 'Alpine.js', 'MySQL'],
            ],
            [
                'title'         => 'EHS ODATA Colocation',
                'description'   => 'Sistema WEB responsivo para pesquisa interna da empresa. Desenvolvimento full stack desde o back-end (servidor, JavaScript, PHP, MySQL) até o front-end (CSS, HTML, Bootstrap).',
                'github_url'    => null,
                'demo_url'      => null,
                'thumbnail_url' => null,
                'is_featured'   => false,
                'tags'          => ['PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', 'Bootstrap'],
            ],
            [
                'title'         => 'Vitrine Beautycare Brazil',
                'description'   => 'Sistema WEB responsivo para cadastro de empresas em vitrine no site da Beautycare Brazil. Contém importação e exportação de dados, geração de relatórios e atalhos de teclado para melhor experiência do usuário.',
                'github_url'    => null,
                'demo_url'      => null,
                'thumbnail_url' => null,
                'is_featured'   => false,
                'tags'          => ['PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', 'Bootstrap'],
            ],
            [
                'title'         => 'Grupo JMA',
                'description'   => 'Site institucional responsivo do Grupo JMA. Desenvolvimento full stack desde o back-end até o front-end.',
                'github_url'    => null,
                'demo_url'      => 'https://gjma.com.br/',
                'thumbnail_url' => null,
                'is_featured'   => false,
                'tags'          => ['PHP', 'JavaScript', 'HTML', 'CSS'],
            ],
            [
                'title'         => 'Blog Figueiredo Soares Advogados',
                'description'   => 'Blog responsivo da Figueiredo Soares Advogados, com painel administrativo para gerenciamento de postagens pelo usuário administrador.',
                'github_url'    => null,
                'demo_url'      => 'https://blog.figueiredosoaresadvogados.com.br/',
                'thumbnail_url' => null,
                'is_featured'   => false,
                'tags'          => ['PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS'],
            ],
            [
                'title'         => 'Site Figueiredo Soares Advogados',
                'description'   => 'Site institucional responsivo da Figueiredo Soares Advogados.',
                'github_url'    => null,
                'demo_url'      => 'https://figueiredosoaresadvogados.com.br/',
                'thumbnail_url' => null,
                'is_featured'   => false,
                'tags'          => ['PHP', 'JavaScript', 'HTML', 'CSS'],
            ],
            [
                'title'         => 'waldycar',
                'description'   => 'Sistema web responsivo da Waldy Soft. Desenvolvimento full stack desde o back-end (servidor, banco de dados, JavaScript, PHP) até o front-end.',
                'github_url'    => null,
                'demo_url'      => 'https://waldycar.com.br/',
                'thumbnail_url' => null,
                'is_featured'   => false,
                'tags'          => ['PHP', 'MySQL', 'JavaScript', 'CSS'],
            ],
            [
                'title'         => 'Sistema de Gestão de Projetos — ODATA',
                'description'   => 'Sistema de gestão de projetos intranet web totalmente responsivo, desenvolvido e mantido de julho de 2018 a junho de 2020.',
                'github_url'    => null,
                'demo_url'      => null,
                'thumbnail_url' => null,
                'is_featured'   => false,
                'tags'          => ['PHP', 'MySQL', 'JavaScript', 'CSS'],
            ],
            [
                'title'         => 'sysemagilfit',
                'description'   => 'Sistema web responsivo de gestão financeira e de produtos integrado ao site da Emagilfit.',
                'github_url'    => null,
                'demo_url'      => 'https://sysemagilfit.com.br/',
                'thumbnail_url' => null,
                'is_featured'   => false,
                'tags'          => ['PHP', 'MySQL', 'JavaScript', 'CSS'],
            ],
            [
                'title'         => 'sysprogressorh',
                'description'   => 'Sistema web responsivo da Progresso RH.',
                'github_url'    => null,
                'demo_url'      => 'https://sysprogressorh.com.br/',
                'thumbnail_url' => null,
                'is_featured'   => false,
                'tags'          => ['PHP', 'MySQL', 'JavaScript', 'CSS'],
            ],
        ];

        foreach ($projects as $data) {
            $tagNames = $data['tags'];
            unset($data['tags']);

            $project = $user->projects()->updateOrCreate(
                ['title' => $data['title']],
                $data
            );

            $tagIds = Tag::whereIn('name', $tagNames)->pluck('id');
            $project->tags()->sync($tagIds);
        }
    }
}
