<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function index()
    {
        $listaFuncionarios = Funcionario::orderBy('ordem_exibicao')->get();

        return view('admin.funcionarios.index', compact('listaFuncionarios'));
    }
}
