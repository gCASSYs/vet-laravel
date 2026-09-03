<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pet extends Model
{
    // Tabela do banco representada por este model.
    protected $table = 'tbl_pet';

    // Chave primária personalizada da tabela de pets.
    protected $primaryKey = 'id_pet';

    // A tabela não utiliza os campos automáticos created_at e updated_at.
    public $timestamps = false;

    // Relacionamento um para muitos:
    // um pet pode possuir vários agendamentos.
    public function agendamentos(): HasMany
    {
        return $this->hasMany(Agendamento::class, 'id_pet', 'id_pet');
    }
}
