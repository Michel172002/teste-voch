<?php

namespace Database\Seeders;

use App\Models\CargoColaborador;
use Illuminate\Database\Seeder;

class GerarCargoColaboradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargoColaboradorList = [];
        $j = 1;
        for ($i = 1; $i <= 100; $i++) {
            $cargoColaboradorList[] = [
                'cargo_id' => $j,
                'colaborador_id' => $i,
                'nota_desempenho' => mt_rand(0, 10),
            ];

            if ($j == 10) {
                $j = 1;
            } else {
                $j++;
            }
        };

        CargoColaborador::insert($cargoColaboradorList);
    }
}
