<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MensagemContato;

class MensagemContatoController extends Controller
{
    public function index()
    {
        $listaMensagensContato = MensagemContato::orderByDesc('id_mensagem')->get();

        return view('admin.mensagens-contato.index', compact('listaMensagensContato'));
    }
}
