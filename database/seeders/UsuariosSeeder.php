<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;


class UsuariosSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 3; $i++){
            $faker = Faker::create();
            $usuario = new Usuario();
            $usuario->login = $faker->firstName;
            $usuario->password = $faker->word;
            $usuario->save();
        }
    }
}
