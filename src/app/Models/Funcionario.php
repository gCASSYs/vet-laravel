<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model{

    protected $table = 'tbl_funcionario';
    protected $primaryKey = 'id_funcionario';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'cargo',
        'categoria',
        'crmv',
        'descricao',
        'imagem',
        'facebook',
        'instagram',
        'whatsapp',
        'exibir_site',
        'ordem_exibicao',
        'ativo'
    ];

}// FIM DA CLASS