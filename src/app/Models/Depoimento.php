<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Depoimento extends Model{

    protected $table = 'tbl_depoimento';
    protected $primaryKey = 'id_depoimento';
    public $timestamps = false;

    protected $fillable = [
        'id_cliente',
        'tipo_cliente',
        'mensagem',
        'ordem_exibicao',
        'ativo'
    ];

    // Cada depoimento pertence a um cliente
    public function DepoimentoCliente(){

        return $this->belongsTo(Cliente::class, 'id_cliente', 'id_cliente');

    }

}// FIM DA CLASS