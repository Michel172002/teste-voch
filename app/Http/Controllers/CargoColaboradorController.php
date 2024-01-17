<?php

namespace App\Http\Controllers;

use App\Models\CargoColaborador;
use App\Models\Colaborador;
use Illuminate\Http\Request;

class CargoColaboradorController extends Controller
{
    public function create(Request $request)
    {
        $colaboradores = Colaborador::all();

        return view('cargoColaboradores.create')->with('colaboradores', $colaboradores);
    }

    public function store(Request $request)
    {
        CargoColaborador::where('colaborador_id', $request->colaborador_id)
            ->update([
                'nota_desempenho' => $request->nota_desempenho,
            ]);

        return redirect()->route('home.page');
    }
}