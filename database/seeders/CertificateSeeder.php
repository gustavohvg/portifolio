<?php

namespace Database\Seeders;

use App\Models\Certificate;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $user = User::first();

        $certificates = [
            [
                'title'          => 'Design UX/UI',
                'institution'    => 'CoderHouse',
                'credential_url' => null,
                'issued_at'      => '2023-12-01',
            ],
            [
                'title'          => 'Análise e Desenvolvimento de Sistemas',
                'institution'    => 'Universidade Paulista (UNIP)',
                'credential_url' => null,
                'issued_at'      => '2023-12-01',
            ],
            [
                'title'          => 'Estrutura de Dados e Algoritmos',
                'institution'    => 'Digital Innovation One',
                'credential_url' => null,
                'issued_at'      => '2021-02-01',
            ],
            [
                'title'          => 'Introdução à Lógica de Programação',
                'institution'    => 'Cursos iPED',
                'credential_url' => null,
                'issued_at'      => '2021-02-01',
            ],
            [
                'title'          => 'Lógica de Programação Essencial',
                'institution'    => 'Digital Innovation One',
                'credential_url' => null,
                'issued_at'      => '2021-02-01',
            ],
            [
                'title'          => 'Inglês Básico Níveis A1 e A2',
                'institution'    => 'Universo Idiomas',
                'credential_url' => null,
                'issued_at'      => '2021-01-01',
            ],
            [
                'title'          => 'Curso de React de A-Z',
                'institution'    => 'Udemy',
                'credential_url' => null,
                'issued_at'      => '2019-04-01',
            ],
            [
                'title'          => 'Curso Completo de Desenvolvimento Web',
                'institution'    => 'Udemy',
                'credential_url' => null,
                'issued_at'      => '2018-03-01',
            ],
        ];

        foreach ($certificates as $data) {
            $user->certificates()->updateOrCreate(
                ['title' => $data['title'], 'institution' => $data['institution']],
                $data
            );
        }
    }
}
