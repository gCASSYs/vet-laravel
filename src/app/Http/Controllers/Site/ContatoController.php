<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\ConfiguracaoSite;
use App\Models\MensagemContato;
use Illuminate\Http\Request;

class ContatoController extends Controller{

    // Método CONTATO - Carregar a página de contato
    public function contato(){

        // Busca os dados principais da clínica
        $configuracao = ConfiguracaoSite::where('id_configuracao', 1)->first();

        return view('site.contato.contato', compact('configuracao'));

    }

    // Método ENVIAR - Salvar mensagem enviada pelo formulário
    public function enviar(Request $request){
        

        MensagemContato::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'assunto' => $request->assunto,
            'mensagem' => $request->mensagem,
            'status' => 'NOVA'
        ]);
        

        return redirect()
            ->route('contato')
            ->with('sucesso', 'Mensagem enviada com sucesso!');
            

    }
    

}// FIM DA CLASS