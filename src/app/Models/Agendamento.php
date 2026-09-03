<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    // Informa ao Laravel qual tabela do banco este model representa.
    protected $table = 'tbl_agendamento';

    // Define a chave primária da tabela, pois ela não usa o nome padrão "id".
    protected $primaryKey = 'id_agendamento';

    // Ativa o preenchimento automático das datas de criação e atualização.
    public $timestamps = true;

    // Substitui o campo padrão "created_at" pelo campo existente no banco.
    public const CREATED_AT = 'data_solicitacao';

    // Substitui o campo padrão "updated_at" pelo campo existente no banco.
    public const UPDATED_AT = 'data_atualizacao_agendamento';

    // Campos que podem ser preenchidos usando create() ou update().
    protected $fillable = [
        // IDs usados para ligar o agendamento ao cliente, pet e serviço.
        'id_cliente',
        'id_pet',
        'id_servico',

        // Data e horário escolhidos pelo cliente para o atendimento.
        'data_solicitada',
        'horario_solicitado',

        // Situação atual do agendamento, por exemplo: EM_AVALIACAO ou CONFIRMADO.
        'status',

        // Observações escritas pelo cliente e pela clínica.
        'observacao_cliente',
        'observacao_clinica',

        // Data em que a clínica confirmou o agendamento.
        'data_confirmacao',
    ];

    // Converte automaticamente os campos de data em objetos de data do Laravel (Carbon).
    protected function casts(): array
    {
        return [
            'data_solicitada' => 'date',
            'data_solicitacao' => 'datetime',
            'data_confirmacao' => 'datetime',
            'data_atualizacao_agendamento' => 'datetime',
        ];
    }

    // Relacionamento muitos para um:
    // vários agendamentos podem pertencer ao mesmo cliente.
    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id_cliente');
    }

    // Relacionamento muitos para um:
    // vários agendamentos podem pertencer ao mesmo pet.
    public function pet(): BelongsTo
    {
        return $this->belongsTo(Pet::class, 'id_pet', 'id_pet');
    }

    // Relacionamento muitos para um:
    // vários agendamentos podem utilizar o mesmo serviço.
    public function servico(): BelongsTo
    {
        return $this->belongsTo(Servico::class, 'id_servico', 'id_servico');
    }
}
