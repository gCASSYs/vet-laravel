<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

}// FIM DA CLASS