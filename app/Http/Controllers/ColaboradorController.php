<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\CargoColaborador;
use App\Models\Colaborador;
use App\Models\Unidade;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    public function create(Request $request)
    {
        $unidades = Unidade::all();
        $cargos = Cargo::all();

        return view('colaboradores.create')->with('unidades', $unidades)->with('cargos', $cargos);
    }

    public function store(Request $request)
    {
        $colaborador = Colaborador::create($request->all());

        CargoColaborador::insert([
            'cargo_id' => $request->cargo_id,
            'colaborador_id' => $colaborador->id,
            'nota_desempenho' => 0,
        ]);

        return redirect()->route('home.page');
    }
}
