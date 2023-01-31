<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Categoria::create([
            'id' => 1,
            'nombre' => 'Foro',
        ]);

        \App\Models\Categoria::create([
            'id' => 2,
            'nombre' => 'Noticias',
        ]);

        \App\Models\Categoria::create([
            'id' => 3,
            'nombre' => 'Servidor',
        ]);

    }
}
