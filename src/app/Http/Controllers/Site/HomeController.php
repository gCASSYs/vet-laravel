<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class HomeController extends Controller{
    
    // Método Home - carrega a página inicial do site Animalis
    public function home(){
        
        return view('site.home.home');
    }

} // Fim da classe