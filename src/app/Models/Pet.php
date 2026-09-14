<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pet extends Model
{
    // Tabela do banco representada por este model.
    protected $table = 'tbl_pet';

    // Chave primária personalizada da tabela de pets.
    protected $primaryKey = 'id_pet';

    // A tabela não utiliza os campos automáticos created_at e updated_at.
    public $timestamps = false;

    // Campos que podem ser preenchidos usando create() ou update().
    protected $fillable = [
        'id_cliente',
        'nome',
        'especie',
        'raca',
        'sexo',
        'data_nascimento',
        'peso',
        'observacoes',
        'ativo',
    ];

    // Cada pet pertence a um cliente (tutor).
    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id_cliente');
    }

    // Relacionamento um para muitos:
    // um pet pode possuir vários agendamentos.
    public function agendamentos(): HasMany
    {
        return $this->hasMany(Agendamento::class, 'id_pet', 'id_pet');
    }
}
