<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnidadeFormRequest;
use App\Models\Unidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnidadeController extends Controller
{
    public function create()
    {
        return view('unidades.create');
    }

    public function store(UnidadeFormRequest $request)
    {
        Unidade::create($request->all());

        return redirect()->route('home.page');
    }

    public function relatorioUnidades()
    {
        $data = Unidade::select('unidades.*', DB::raw('COUNT(colaboradores.id) as quantidade_colaboradores'))
            ->leftJoin('colaboradores', 'unidades.id', '=', 'colaboradores.unidade_id')
            ->groupBy('unidades.id')
            ->orderBy('quantidade_colaboradores', 'desc')
            ->get();

        return view('unidades.relatorio')->with('data', $data);
    }
}
