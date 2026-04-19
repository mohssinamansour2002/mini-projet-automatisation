<?php

namespace Database\Seeders;

use App\Models\Formation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormationSeeder extends Seeder
{
    public function run(): void
    {
        Formation::create([
            'titre' => 'Laravel de base',
            'description' => 'Introduction au framework Laravel et creation d applications web.',
            'duree' => '4 semaines',
        ]);

        Formation::create([
            'titre' => 'Docker pour debutants',
            'description' => 'Bases de la conteneurisation avec Docker et Docker Compose.',
            'duree' => '3 semaines',
        ]);

        Formation::create([
            'titre' => 'Git et GitHub',
            'description' => 'Gestion de version, depots, branches et collaboration.',
            'duree' => '2 semaines',
        ]);

        Formation::create([
            'titre' => 'CI/CD avec GitHub Actions',
            'description' => 'Automatisation du build et du deploiement.',
            'duree' => '2 semaines',
        ]);
    }
}