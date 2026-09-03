<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model{

    protected $table = 'tbl_cliente';
    protected $primaryKey = 'id_cliente';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'senha',
        'ativo'
    ];

    // Um cliente pode ter vários depoimentos
    public function ClienteDepoimento(){

        return $this->hasMany(Depoimento::class, 'id_cliente', 'id_cliente');

    }

    // Relacionamento um para muitos:
    // um cliente pode realizar vários agendamentos.
    public function agendamentos(): HasMany
    {
        return $this->hasMany(Agendamento::class, 'id_cliente', 'id_cliente');
    }

}// FIM DA CLASS
