<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Servico extends Model{

    protected $table = 'tbl_servico';
    protected $primaryKey = 'id_servico';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'slug',
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

    // Relacionamento um para muitos:
    // o mesmo serviço pode aparecer em vários agendamentos.
    public function agendamentos(): HasMany
    {
        return $this->hasMany(Agendamento::class, 'id_servico', 'id_servico');
    }

}// FIM DA CLASS
