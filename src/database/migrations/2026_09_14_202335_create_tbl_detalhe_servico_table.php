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
        Schema::create('tbl_detalhe_servico', function (Blueprint $table) {
            $table->integer('id_detalhe', true);
            $table->integer('id_servico')->index('fk_detalhe_servico_servico');
            $table->string('titulo', 150);
            $table->string('subtitulo', 180)->nullable();
            $table->text('conteudo');
            $table->integer('ordem_exibicao')->default(0);
            $table->boolean('ativo')->default(true);
            $table->dateTime('data_criacao_detalhe')->useCurrent();
            $table->dateTime('data_atualizacao_detalhe')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_detalhe_servico');
    }
};
