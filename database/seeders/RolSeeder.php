<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Rol::create([
            'id' => 1,
            'nombre' => 'Superadmin',
            'descripcion' => 'Controla toda la gestión del sistema, y desarrolla los módulos del sistema.',
        ]);

        \App\Models\Rol::create([
            'id' => 2,
            'nombre' => 'Administrador',
            'descripcion' => 'Controla toda la gestión del sistema.',
        ]);

        \App\Models\Rol::create([
            'id' => 3,
            'nombre' => 'Community Manager',
            'descripcion' => 'Controla toda la gestión de publicación de noticias.',
        ]);

        \App\Models\Rol::create([
            'id' => 4,
            'nombre' => 'Moderador',
            'descripcion' => 'Controla los usuarios registrados menos al administrador.',
        ]);
    }
}
