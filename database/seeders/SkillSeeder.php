<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $user = User::first();

        $skills = [
            // Front-end
            ['name' => 'HTML',         'category' => 'Front-end', 'proficiency' => 10],
            ['name' => 'CSS',          'category' => 'Front-end', 'proficiency' => 10],
            ['name' => 'JavaScript',   'category' => 'Front-end', 'proficiency' => 9],
            ['name' => 'jQuery',       'category' => 'Front-end', 'proficiency' => 9],
            ['name' => 'Bootstrap',    'category' => 'Front-end', 'proficiency' => 10],
            ['name' => 'Tailwind CSS', 'category' => 'Front-end', 'proficiency' => 8],
            ['name' => 'Alpine.js',    'category' => 'Front-end', 'proficiency' => 7],
            ['name' => 'Vue.js',       'category' => 'Front-end', 'proficiency' => 7],
            ['name' => 'React',        'category' => 'Front-end', 'proficiency' => 6],
            ['name' => 'TypeScript',   'category' => 'Front-end', 'proficiency' => 5],

            // Back-end
            ['name' => 'PHP',       'category' => 'Back-end', 'proficiency' => 10],
            ['name' => 'Laravel',   'category' => 'Back-end', 'proficiency' => 7],
            ['name' => 'Node.js',   'category' => 'Back-end', 'proficiency' => 5],
            ['name' => 'API REST',  'category' => 'Back-end', 'proficiency' => 9],
            ['name' => 'AJAX',      'category' => 'Back-end', 'proficiency' => 9],
            ['name' => 'JSON',      'category' => 'Back-end', 'proficiency' => 10],
            ['name' => 'Cron Job',  'category' => 'Back-end', 'proficiency' => 8],

            // Banco de dados
            ['name' => 'MySQL',   'category' => 'Banco de dados', 'proficiency' => 10],
            ['name' => 'MariaDB', 'category' => 'Banco de dados', 'proficiency' => 9],

            // DevOps & Ferramentas
            ['name' => 'Git',    'category' => 'Ferramentas', 'proficiency' => 8],
            ['name' => 'GitHub', 'category' => 'Ferramentas', 'proficiency' => 8],
            ['name' => 'Linux',  'category' => 'Ferramentas', 'proficiency' => 7],
            ['name' => 'Docker', 'category' => 'Ferramentas', 'proficiency' => 5],
            ['name' => 'n8n',    'category' => 'Ferramentas', 'proficiency' => 8],

            // CMS & Plataformas
            ['name' => 'WordPress', 'category' => 'CMS', 'proficiency' => 9],

            // Design
            ['name' => 'Figma',        'category' => 'Design', 'proficiency' => 8],
            ['name' => 'Canva',        'category' => 'Design', 'proficiency' => 8],
            ['name' => 'UX/UI Design', 'category' => 'Design', 'proficiency' => 7],

            // Outros
            ['name' => 'Inteligência Artificial', 'category' => 'Outros', 'proficiency' => 7],
            ['name' => 'Arquitetura de Software', 'category' => 'Outros', 'proficiency' => 8],
            ['name' => 'Desenvolvimento SaaS',    'category' => 'Outros', 'proficiency' => 8],
        ];

        foreach ($skills as $data) {
            $user->skills()->updateOrCreate(
                ['name' => $data['name'], 'user_id' => $user->id],
                $data
            );
        }
    }
}
