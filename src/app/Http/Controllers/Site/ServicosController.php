<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Servico;

class ServicosController extends Controller
{
    // Método Serviços - carrega a página de serviços
    public function servicos()
    {
        $listaServico = Servico::with(['ServicoDetalhe', 'ServicoHorario'])
            ->where('ativo', 1)
            ->orderBy('ordem_exibicao', 'asc')
            ->get();

        return view('site.servicos.servicos', compact('listaServico'));
    }

} // Fim da classe
