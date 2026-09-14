<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $listaClientes = Cliente::orderBy('id_cliente')->get();

        return view('admin.clientes.index', compact('listaClientes'));
    }
}
