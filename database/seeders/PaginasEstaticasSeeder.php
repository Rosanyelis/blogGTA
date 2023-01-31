<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaginasEstaticasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\PaginasEstaticas::create([
            'id' => 1,
            'nombre' => 'politicas-privacidad',
            'contenido' => '',
        ]);
        \App\Models\PaginasEstaticas::create([
            'id' => 2,
            'nombre' => 'politicas-reembolso',
            'contenido' => '',
        ]);
        \App\Models\PaginasEstaticas::create([
            'id' => 3,
            'nombre' => 'acuerdo-usuario',
            'contenido' => '',
        ]);
    }
}
