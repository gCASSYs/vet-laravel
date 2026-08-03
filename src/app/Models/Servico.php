<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model{

    protected $table = 'tbl_servico';
    protected $primaryKey = 'id_servico';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'descricao_curta',
        'imagem',
        'ordem_exibicao',
        'ativo'
    ];

    // Um serviço pode ter vários detalhes
    public function ServicoDetalhe(){

        return $this->hasMany(DetalheServico::class, 'id_servico', 'id_servico');

    }

    // Um serviço pode ter vários horários
    public function ServicoHorario(){

        return $this->hasMany(HorarioServico::class, 'id_servico', 'id_servico');

    }

}// FIM DA CLASS