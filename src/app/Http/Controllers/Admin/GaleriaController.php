<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeria;

class GaleriaController extends Controller
{
    public function index()
    {
        $listaGalerias = Galeria::orderBy('ordem_exibicao')->get();

        return view('admin.galerias.index', compact('listaGalerias'));
    }
}
