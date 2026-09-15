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
        Schema::create('tbl_usuario_sistema', function (Blueprint $table) {
            $table->integer('id_usuario', true);
            $table->integer('id_funcionario')->index('fk_usuario_sistema_funcionario');
            $table->integer('id_perfil')->index('fk_usuario_sistema_perfil');
            $table->string('email', 120)->unique('email');
            $table->string('senha');
            $table->boolean('ativo')->default(true);
            $table->dateTime('ultimo_acesso')->nullable();
            $table->dateTime('data_cadastro')->useCurrent();
            $table->dateTime('data_atualizacao_usuario')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_usuario_sistema');
    }
};
