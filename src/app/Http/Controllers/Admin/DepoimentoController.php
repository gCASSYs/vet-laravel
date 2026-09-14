<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Depoimento;

class DepoimentoController extends Controller
{
    public function index()
    {
        $listaDepoimentos = Depoimento::with('DepoimentoCliente')->orderBy('ordem_exibicao')->get();

        return view('admin.depoimentos.index', compact('listaDepoimentos'));
    }
}
