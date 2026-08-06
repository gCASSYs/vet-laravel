<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Galeria;

class GaleriaController extends Controller
{
    // Método Galeria - carrega a página de galeria
    public function galeria()
    {
        // Busca as imagens ativas da galeria para exibir na home
        $listaGaleria = Galeria::where('ativo', 1)
            ->orderBy('ordem_exibicao', 'asc')
            ->get();


        return view('site.galeria.galeria', compact('listaGaleria'));
    }

} // Fim da classe