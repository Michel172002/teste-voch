<?php

namespace Database\Seeders;

use App\Models\Cargo;
use Illuminate\Database\Seeder;

class GerarCargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargos = [];
        for ($i = 1; $i <= 10; $i++) {
            $cargos[] = [
                'cargo' => "Cargo $i"
            ];
        }

        Cargo::insert($cargos);
    }
}
