<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model{

    protected $table = 'tbl_galeria';
    protected $primaryKey = 'id_imagem';
    public $timestamps = false;

    protected $fillable = [
        'titulo',
        'descricao',
        'imagem',
        'categoria',
        'ordem_exibicao',
        'ativo'
    ];

}// FIM DA CLASS