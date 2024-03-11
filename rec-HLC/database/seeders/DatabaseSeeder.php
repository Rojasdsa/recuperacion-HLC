<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\User;
use  App\Models\Receta;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Pedro González',
                'email' => 'pedro@admin.com',
                'email_verified_at' => now(),
                'password' => bcrypt('1')
            ],
        ];  

        foreach ($users as $user) {
            User::create($user);
        }

        $recetas = [
            [
                'nombre' => 'Puchero',
                'ingredientes' => 'todo lo que lleva el puchero',
                'tiempo' => '3 horas',
                'utensilios' => 'Olla express, cazo',
                'descripcion' => 'clásico pucherito familiar',
            ],
        ];  

        foreach ($recetas as $receta) {
            Receta::create($receta);
        }
    }
}
