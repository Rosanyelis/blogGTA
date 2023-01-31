<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriaspSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Categoriap::create([
            'id' => 1,
            'nombre' => 'Ropa',
        ]);

        \App\Models\Categoriap::create([
            'id' => 2,
            'nombre' => 'Armamento',
        ]);

        \App\Models\Categoriap::create([
            'id' => 3,
            'nombre' => 'Auto',
        ]);

    }
}
