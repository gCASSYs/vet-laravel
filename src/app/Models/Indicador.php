<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indicador extends Model{

    protected $table = 'tbl_indicador';
    protected $primaryKey = 'id_indicador';
    public $timestamps = false;

    protected $fillable = [
        'numero',
        'titulo',
        'icone',
        'ordem_exibicao',
        'ativo'
    ];

}// FIM DA CLASS