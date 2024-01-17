<?php

namespace Database\Seeders;

use App\Models\Colaborador;
use Illuminate\Database\Seeder;

class GerarColaboradoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('pt_BR');

        $colaboradores = [];
        for ($i = 1; $i <= 100; $i++) {
            $colaboradores[] = [
                'unidade_id' => $i,
                'nome' => $faker->name(),
                'cpf' => $faker->cpf(false),
                'email' => $faker->email(),
            ];
        };

        Colaborador::insert($colaboradores);
    }
}
