<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agendamento;

class AgendamentoController extends Controller
{
    public function index()
    {
        $listaAgendamentos = Agendamento::with(['cliente', 'pet', 'servico'])->orderByDesc('id_agendamento')->get();

        return view('admin.agendamentos.index', compact('listaAgendamentos'));
    }
}
