<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class ContatoController extends Controller
{
    // Método Contato - carrega a página de contato
    public function contato()
    {
        return view('site.contato.contato');
    }

} // Fim da classe