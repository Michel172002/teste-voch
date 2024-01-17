<?php

namespace Database\Seeders;

use App\Models\Unidade;
use Illuminate\Database\Seeder;

class GerarUnidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('pt_BR');

        $unidades = [];
        for ($i = 1; $i <= 100; $i++) {
            $unidades[] = [
                'nome_fantasia' => "Nome Fantasia $i",
                'razao_social' => "Razao Social $i",
                'cnpj' => $faker->cnpj(false),
            ];
        };

        Unidade::insert($unidades);
    }
}
