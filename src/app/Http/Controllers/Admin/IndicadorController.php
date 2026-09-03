<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Indicador;

class IndicadorController extends Controller
{   
    //Lista todos os indicadores cadastrados
    public function index()
    {
        $listaIndicador = Indicador::orderBy('id_indicador')->get();

        
        return view('admin.indicador.index', compact('listaIndicador'));
    }
}