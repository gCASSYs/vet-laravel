<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class SobreController extends Controller
{
    // Método Sobre - carrega a página sobre
    public function sobre()
    {
        return view('site.sobre.sobre');
    }

} // Fim da classe