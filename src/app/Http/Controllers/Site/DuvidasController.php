<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class DuvidasController extends Controller
{
    // Método Dúvidas - carrega a página de dúvidas frequentes
    public function duvidas()
    {
        return view('site.duvidas.duvidas');
    }

} // Fim da classe