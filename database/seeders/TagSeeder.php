<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $tags = [
            'PHP', 'Laravel', 'JavaScript', 'jQuery', 'AJAX',
            'HTML', 'CSS', 'Bootstrap', 'Tailwind CSS', 'Alpine.js',
            'Vue.js', 'React', 'Node.js', 'TypeScript', 'JSON',
            'MySQL', 'MariaDB', 'API REST', 'WordPress', 'Docker',
            'Git', 'Linux', 'Figma', 'UX/UI Design', 'SaaS',
            'Inteligência Artificial', 'n8n', 'WhatsApp API',
        ];

        foreach ($tags as $name) {
            Tag::updateOrCreate(
                ['slug' => Str::slug($name)],
                ['name' => $name]
            );
        }
    }
}
