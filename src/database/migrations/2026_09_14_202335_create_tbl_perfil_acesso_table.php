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
        Schema::create('tbl_perfil_acesso', function (Blueprint $table) {
            $table->integer('id_perfil', true);
            $table->string('nome_perfil', 80);
            $table->text('descricao')->nullable();
            $table->boolean('ativo')->default(true);
            $table->dateTime('data_criacao_perfil')->useCurrent();
            $table->dateTime('data_atualizacao_perfil')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_perfil_acesso');
    }
};
