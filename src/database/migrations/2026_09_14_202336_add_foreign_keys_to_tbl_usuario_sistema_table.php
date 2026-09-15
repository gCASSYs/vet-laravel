<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('tbl_usuario_sistema', function (Blueprint $table) {
            $table->foreign(['id_funcionario'], 'fk_usuario_sistema_funcionario')->references(['id_funcionario'])->on('tbl_funcionario')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_perfil'], 'fk_usuario_sistema_perfil')->references(['id_perfil'])->on('tbl_perfil_acesso')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_usuario_sistema', function (Blueprint $table) {
            $table->dropForeign('fk_usuario_sistema_funcionario');
            $table->dropForeign('fk_usuario_sistema_perfil');
        });
    }
};
