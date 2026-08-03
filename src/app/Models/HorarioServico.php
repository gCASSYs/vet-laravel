<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HorarioServico extends Model{

    protected $table = 'tbl_horario_servico';
    protected $primaryKey = 'id_horario';
    public $timestamps = false;

    protected $fillable = [
        'id_servico',
        'dia_semana',
        'horario_inicio',
        'horario_fim',
        'atendimento_24h',
        'observacao',
        'ativo'
    ];

    // Cada horário pertence a um serviço
    public function HorarioServico(){

        return $this->belongsTo(Servico::class, 'id_servico', 'id_servico');

    }

}// FIM DA CLASS