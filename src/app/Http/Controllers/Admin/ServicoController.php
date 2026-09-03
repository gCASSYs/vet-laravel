<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Servico;

class ServicoController extends Controller
{   
    //Lista todos os serviços cadastrados
    public function index()
    {
        $listaServicos = Servico::orderBy('id_servico')->get();

        
        return view('admin.servicos.index', compact('listaServicos'));
    }
}