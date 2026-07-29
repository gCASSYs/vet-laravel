<?php

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\SobreController;
use App\Http\Controllers\Site\ServicosController;
use App\Http\Controllers\Site\GaleriaController;
use App\Http\Controllers\Site\DuvidasController;
use App\Http\Controllers\Site\ContatoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/sobre', [SobreController::class, 'sobre'])->name('sobre');
Route::get('/servicos', [ServicosController::class, 'servicos'])->name('servicos');
Route::get('/galeria', [GaleriaController::class, 'galeria'])->name('galeria');
Route::get('/duvidas', [DuvidasController::class, 'duvidas'])->name('duvidas');
Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');

//Basicamente ele está dizendo: quando clicar vai ir para o Controller correspondente,
//pois cada página tem uma classe, e o name serve para facilitar a chamada no menu com route().