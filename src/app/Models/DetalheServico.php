<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalheServico extends Model{

    protected $table = 'tbl_detalhe_servico';
    protected $primaryKey = 'id_detalhe';
    public $timestamps = false;

    protected $fillable = [
        'id_servico',
        'titulo',
        'subtitulo',
        'conteudo',
        'ordem_exibicao',
        'ativo'
    ];

    // Um detalhe pertence a um serviço
    public function DetalheServico(){

        return $this->belongsTo(Servico::class, 'id_servico', 'id_servico');

    }

}// FIM DA CLASS