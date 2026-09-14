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
use App\Http\Controllers\Admin\AgendamentoController;
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\Admin\ConfiguracaoSiteController;
use App\Http\Controllers\Admin\DepoimentoController;
use App\Http\Controllers\Admin\DetalheServicoController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\FuncionarioController;
use App\Http\Controllers\Admin\GaleriaController as AdminGaleriaController;
use App\Http\Controllers\Admin\HorarioServicoController;
use App\Http\Controllers\Admin\MensagemContatoController;
use App\Http\Controllers\Admin\PetController;

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

Route::get('/admin/detalhes-servico', [DetalheServicoController::class, 'index'])->name('admin.detalhes-servico.index');
Route::get('/admin/horarios-servico', [HorarioServicoController::class, 'index'])->name('admin.horarios-servico.index');
Route::get('/admin/funcionarios', [FuncionarioController::class, 'index'])->name('admin.funcionarios.index');
Route::get('/admin/clientes', [ClienteController::class, 'index'])->name('admin.clientes.index');
Route::get('/admin/depoimentos', [DepoimentoController::class, 'index'])->name('admin.depoimentos.index');
Route::get('/admin/faqs', [FaqController::class, 'index'])->name('admin.faqs.index');
Route::get('/admin/galerias', [AdminGaleriaController::class, 'index'])->name('admin.galerias.index');
Route::get('/admin/mensagens-contato', [MensagemContatoController::class, 'index'])->name('admin.mensagens-contato.index');
Route::get('/admin/configuracoes-site', [ConfiguracaoSiteController::class, 'index'])->name('admin.configuracoes-site.index');
Route::get('/admin/pets', [PetController::class, 'index'])->name('admin.pets.index');
Route::get('/admin/agendamentos', [AgendamentoController::class, 'index'])->name('admin.agendamentos.index');
