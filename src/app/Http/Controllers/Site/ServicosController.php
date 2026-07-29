<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class ServicosController extends Controller
{
    // Método Serviços - carrega a página de serviços
    public function servicos()
    {
        return view('site.servicos.servicos');
    }

} // Fim da classe