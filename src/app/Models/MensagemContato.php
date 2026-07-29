<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MensagemContato extends Model{

    protected $table = 'tbl_mensagem_contato';
    protected $primaryKey = 'id_mensagem';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'assunto',
        'mensagem',
        'status'
    ];

}// FIM DA CLASS