<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Agendamento;
use App\Models\Funcionario;
use App\Models\MensagemContato;


class AdminController extends Controller{


    // Metodo DASH - Carregar a INDEX (DASH)
    public function dashboard(){
          
        //quantidade de clientes ativo
        $qtdClientes = Cliente::where('ativo', '1')->count();
        //Quantidade total de agendamentos ativos
        $qtdAgendamento = Agendamento::where('status', 'ativo')->count();
        //qUANTIDADE TOTAL DE PRODUTOS EM destaque
        $qtdFuncionario = Funcionario::where('ativo', 1)->count();
        //Valor total de vendas
        $qtdMensagemContato = MensagemContato::where('status', 'NOVA')->count();





       return view('admin.dashboard', compact('qtdClientes', 'qtdAgendamento', 'qtdFuncionario', 'qtdMensagemContato'));

    }
}    