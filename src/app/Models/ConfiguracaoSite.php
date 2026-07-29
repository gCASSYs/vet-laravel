<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConfiguracaoSite extends Model{

    protected $table = 'tbl_configuracao_site';
    protected $primaryKey = 'id_configuracao';
    public $timestamps = false;

    protected $fillable = [
        'nome_clinica',
        'logo',
        'descricao_footer',
        'email',
        'telefone',
        'whatsapp',
        'endereco',
        'cidade',
        'estado',
        'instagram',
        'facebook'
    ];

}// FIM DA CLASS