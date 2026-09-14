<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HorarioServico;

class HorarioServicoController extends Controller
{
    public function index()
    {
        $listaHorariosServico = HorarioServico::with('HorarioServico')->orderBy('id_horario')->get();

        return view('admin.horarios-servico.index', compact('listaHorariosServico'));
    }
}
