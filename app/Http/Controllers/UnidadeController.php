<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnidadeFormRequest;
use App\Models\Unidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnidadeController extends Controller
{
    public function create(Request $request)
    {
        $mensagemSucesso = session('mensagem.sucesso');

        return view('unidades.create')->with('mensagemSucesso', $mensagemSucesso);
    }

    public function store(UnidadeFormRequest $request)
    {
        Unidade::create($request->all());

        $request->session()->flash('mensagem.sucesso','Unidade cadastrada com sucesso!');

        return redirect()->route('unidades.create');
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
