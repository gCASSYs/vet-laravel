<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model{

    protected $table = 'tbl_faq';
    protected $primaryKey = 'id_faq';
    public $timestamps = false;

    protected $fillable = [
        'pergunta',
        'resposta',
        'categoria',
        'ordem_exibicao',
        'ativo'
    ];

}// FIM DA CLASS