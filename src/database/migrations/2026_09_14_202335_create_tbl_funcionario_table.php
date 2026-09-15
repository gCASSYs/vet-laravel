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
        Schema::create('tbl_funcionario', function (Blueprint $table) {
            $table->integer('id_funcionario', true);
            $table->string('nome', 120);
            $table->string('cargo', 100)->nullable();
            $table->string('categoria', 80)->nullable();
            $table->string('crmv', 30)->nullable();
            $table->text('descricao')->nullable();
            $table->string('imagem')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('whatsapp', 30)->nullable();
            $table->boolean('exibir_site')->default(true);
            $table->integer('ordem_exibicao')->default(0);
            $table->boolean('ativo')->default(true);
            $table->dateTime('data_criacao_funcionario')->useCurrent();
            $table->dateTime('data_atualizacao_funcionario')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_funcionario');
    }
};
