<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RedesSocialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\RedesSociales::create([
            'id' => 1,
            'nombre' => 'Facebook',
            'url' => '',
        ]);
        \App\Models\RedesSociales::create([
            'id' => 2,
            'nombre' => 'Twitter',
            'url' => '',
        ]);
        \App\Models\RedesSociales::create([
            'id' => 3,
            'nombre' => 'Instagram',
            'url' => '',
        ]);
        \App\Models\RedesSociales::create([
            'id' => 4,
            'nombre' => 'Youtube',
            'url' => '',
        ]);
        \App\Models\RedesSociales::create([
            'id' => 5,
            'nombre' => 'Discord',
            'url' => '',
        ]);
    }
}
