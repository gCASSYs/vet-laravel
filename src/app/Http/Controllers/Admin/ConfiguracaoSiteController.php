<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConfiguracaoSite;

class ConfiguracaoSiteController extends Controller
{
    public function index()
    {
        $listaConfiguracoesSite = ConfiguracaoSite::orderBy('id_configuracao')->get();

        return view('admin.configuracoes-site.index', compact('listaConfiguracoesSite'));
    }
}
