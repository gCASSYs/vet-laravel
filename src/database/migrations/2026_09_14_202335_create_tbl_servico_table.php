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
        Schema::create('tbl_servico', function (Blueprint $table) {
            $table->integer('id_servico', true);
            $table->string('nome', 120);
            $table->string('slug', 100)->unique('slug');
            $table->text('descricao_curta')->nullable();
            $table->string('imagem')->nullable();
            $table->integer('ordem_exibicao')->default(0);
            $table->boolean('ativo')->default(true);
            $table->dateTime('data_criacao_servico')->useCurrent();
            $table->dateTime('data_atualizacao_servico')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_servico');
    }
};
