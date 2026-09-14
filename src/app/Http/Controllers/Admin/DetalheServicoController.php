<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetalheServico;

class DetalheServicoController extends Controller
{
    public function index()
    {
        $listaDetalhesServico = DetalheServico::with('DetalheServico')->orderBy('ordem_exibicao')->get();

        return view('admin.detalhes-servico.index', compact('listaDetalhesServico'));
    }
}
