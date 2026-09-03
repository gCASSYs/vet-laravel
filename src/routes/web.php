<?php

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\SobreController;
use App\Http\Controllers\Site\ServicosController;
use App\Http\Controllers\Site\GaleriaController;
use App\Http\Controllers\Site\DuvidasController;
use App\Http\Controllers\Site\ContatoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\IndicadorController;
use App\Http\Controllers\Admin\ServicoController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/sobre', [SobreController::class, 'sobre'])->name('sobre');
Route::get('/servicos', [ServicosController::class, 'servicos'])->name('servicos');
Route::get('/servicos/{slug}', [ServicosController::class, 'detalhe'])->name('servicos.detalhe');
Route::get('/galeria', [GaleriaController::class, 'galeria'])->name('galeria');
Route::get('/duvidas', [DuvidasController::class, 'duvidas'])->name('duvidas');
Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');
Route::post('/contato/enviar', [ContatoController::class, 'enviar'])->name('contato.enviar');

//Basicamente ele está dizendo: quando clicar vai ir para o Controller correspondente,
//pois cada página tem uma classe, e o name serve para facilitar a chamada no menu com route().

//PARTE DO DASHBOARD
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

//PARTE DO BANNER
Route::get('/admin/banner', [BannerController::class, 'index'])->name('admin.banner.index');

//PARTE DO INDICADOR
Route::get('/admin/indicador', [IndicadorController::class, 'index'])->name('admin.indicador.index');

//PARTE DOS SERVIÇOS
Route::get('/admin/servicos', [ServicoController::class, 'index'])->name('admin.servicos.index');
