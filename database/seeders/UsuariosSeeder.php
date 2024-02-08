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
        $faker = Faker::create();
        $usuario = new Usuario();
        $usuario->login = $faker->firstName;
        $usuario->password = $faker->word;
        $usuario->save();
    }
}
