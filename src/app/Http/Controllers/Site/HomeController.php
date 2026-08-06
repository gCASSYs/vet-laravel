<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Indicador;
use App\Models\Servico;
use App\Models\Funcionario;
use App\Models\Depoimento;
use App\Models\Galeria;
use App\Models\Faq;
use App\Models\ConfiguracaoSite;

class HomeController extends Controller{

    // Método HOME - Carregar a INDEX/HOME
    public function home(){

        // Busca a lista de banners ativos da página home para exibir na view
        $listaBanner = Banner::where('pagina', 'home')
            ->where('ativo', 1)
            ->orderByDesc('id_banner')
            ->get();

        // Busca os indicadores ativos para exibir na home
        $listaIndicador = Indicador::where('ativo', 1)
            ->orderBy('ordem_exibicao', 'asc')
            ->get();

        // Busca os 3 primeiros serviços ativos para exibir na home
        $listaServico = Servico::where('ativo', 1)
            ->orderBy('ordem_exibicao', 'asc')
            ->limit(3)
            ->get();

        // Busca os funcionários ativos que devem aparecer no site
        $listaEquipe = Funcionario::where('ativo', 1)
            ->where('exibir_site', 1)
            ->orderBy('ordem_exibicao', 'asc')
            ->get();

        // Busca os depoimentos ativos com os dados do cliente
        $listaDepo = Depoimento::with('DepoimentoCliente')
            ->where('ativo', 1)
            ->orderBy('ordem_exibicao', 'asc')
            ->get();


        // Busca as configurações gerais do site
        $configuracao = ConfiguracaoSite::first();

        return view('site.home.home', compact(
            'listaBanner',
            'listaIndicador',
            'listaServico',
            'listaEquipe',
            'listaDepo',
            'configuracao'
        ));

    }

}// FIM DA CLASS