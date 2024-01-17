<?php

namespace App\Http\Controllers;

use App\Models\Unidade;
use Illuminate\Http\Request;

class UnidadeController extends Controller
{
    public function create(Request $request)
    {
        return view('unidades.create');
    }

    public function store(Request $request)
    {
        Unidade::create($request->all());

        return redirect()->route('home.page');
    }
}
