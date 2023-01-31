<?php

namespace Database\Seeders;

use Database\Seeders\CategoriaspSeeder;
use Database\Seeders\CategoriasSeeder;
use Database\Seeders\PaginasEstaticasSeeder;
use Database\Seeders\RedesSocialesSeeder;
use Database\Seeders\RolSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolSeeder::class,
            RedesSocialesSeeder::class,
            CategoriasSeeder::class,
            CategoriaspSeeder::class,
            PaginasEstaticasSeeder::class,
            PostsSeeder::class,
        ]);
        $rol = \App\Models\Rol::where('nombre', 'Superadmin')->first();
        \App\Models\User::create([
            'id' => 1,
            'rol_id' => $rol->id,
            'username' => 'Desarrollador',
            'email' => 'administrador@gmail.com',
            'password' => Hash::make('admin'), // password
        ]);

        $rol = \App\Models\Rol::where('nombre', 'Administrador')->first();
        \App\Models\User::create([
            'id' => 2,
            'rol_id' => $rol->id,
            'username' => 'Nelson Herrera',
            'email' => 'nelsonherrera@gmail.com',
            'password' => Hash::make('admin'), // password
            'HWID' => 'D8903A045B4C82580D4C2F58571CFFB0752AB638EC3EAFE0BBF018C8DD225EC04B6A8A54FA124EA8E3128F987EC833B0D47608A056B6E970FE3EC7C8790896C0',
            'SocialClubName' => 'SoyNelsonHerrera',
            'SocialClubId' => 221357069,
            'LastIP' => '71.138.162.134',
        ]);

        $rol = \App\Models\Rol::where('nombre', 'Community Manager')->first();
        \App\Models\User::create([
            'id' => 3,
            'rol_id' => $rol->id,
            'username' => 'Jon doe',
            'email' => 'communitymanager@gmail.com',
            'password' => Hash::make('admin'), // password
        ]);

        $rol = \App\Models\Rol::where('nombre', 'Moderador')->first();
        \App\Models\User::create([
            'id' => 4,
            'rol_id' => $rol->id,
            'username' => 'Carla doe',
            'email' => 'moderador@gmail.com',
            'password' => Hash::make('admin'), // password
        ]);
    }
}
