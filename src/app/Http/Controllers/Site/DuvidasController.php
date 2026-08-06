<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Faq;

class DuvidasController extends Controller{

    // Método DÚVIDAS - Carregar a página de dúvidas frequentes
    public function duvidas(){

        // Busca as perguntas frequentes ativas
        $listaFaq = Faq::where('ativo', 1)
            ->orderBy('ordem_exibicao', 'asc')
            ->get();

        return view('site.duvidas.duvidas', compact('listaFaq'));

    }

}// FIM DA CLASS