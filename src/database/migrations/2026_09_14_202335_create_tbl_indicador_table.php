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
        Schema::create('tbl_indicador', function (Blueprint $table) {
            $table->integer('id_indicador', true);
            $table->integer('numero');
            $table->string('titulo', 100);
            $table->string('icone', 100)->nullable();
            $table->integer('ordem_exibicao')->default(0);
            $table->boolean('ativo')->default(true);
            $table->dateTime('data_criacao_indicador')->useCurrent();
            $table->dateTime('data_atualizacao_indicador')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_indicador');
    }
};
