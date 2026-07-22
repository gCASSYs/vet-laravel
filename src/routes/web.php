<?php

use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

// Basicamente ele está dizendo:
// quando acessar a raiz do site, vai para o HomeController,
// no método home, e carrega a página inicial.