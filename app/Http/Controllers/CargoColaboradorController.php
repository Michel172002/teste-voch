<?php

namespace App\Http\Controllers;

use App\Http\Requests\CargoColaboradorFormRequest;
use App\Models\CargoColaborador;
use App\Models\Colaborador;
use Illuminate\Http\Request;

class CargoColaboradorController extends Controller
{
    public function edit()
    {
        $colaboradores = Colaborador::all();

        return view('cargoColaboradores.edit')->with('colaboradores', $colaboradores);
    }

    public function update(CargoColaboradorFormRequest $request)
    {
        CargoColaborador::where('colaborador_id', $request->colaborador_id)
            ->update([
                'nota_desempenho' => $request->nota_desempenho,
            ]);

        return redirect()->route('home.page');
    }
}
