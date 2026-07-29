<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class GaleriaController extends Controller
{
    // Método Galeria - carrega a página de galeria
    public function galeria()
    {
        return view('site.galeria.galeria');
    }

} // Fim da classe