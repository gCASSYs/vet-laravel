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

    // Método Detalhe - carrega o conteúdo do serviço selecionado
    public function detalhe($slug)
    {
        $servico = Servico::with([
            'ServicoDetalhe' => function ($query) {
                $query->where('ativo', 1)
                    ->orderBy('ordem_exibicao', 'asc');
            },
            'ServicoHorario' => function ($query) {
                $query->where('ativo', 1)
                    ->orderBy('id_horario', 'asc');
            }
        ])
            ->where('ativo', 1)
            ->where('slug', $slug)
            ->firstOrFail();

        $listaServico = Servico::where('ativo', 1)
            ->orderBy('ordem_exibicao', 'asc')
            ->get();

        return view('site.servicos.detalhe-servico', compact(
            'servico',
            'listaServico'
        ));
    }

} // Fim da classe
