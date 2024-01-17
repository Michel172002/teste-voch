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

    public function relatorioColaboradores()
    {
        $data = Colaborador::select('colaboradores.*', 'unidades.nome_fantasia', 'cargos.cargo')
            ->join('unidades','colaboradores.unidade_id','=','unidades.id')
            ->join('cargo_colaborador','colaboradores.id','=','cargo_colaborador.colaborador_id')
            ->join('cargos','cargo_colaborador.cargo_id','=','cargos.id')
            ->get();

        return view('colaboradores.relatorio')->with('data', $data);
    }
}
