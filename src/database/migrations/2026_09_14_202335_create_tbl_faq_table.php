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
        Schema::create('tbl_faq', function (Blueprint $table) {
            $table->integer('id_faq', true);
            $table->string('pergunta');
            $table->text('resposta');
            $table->string('categoria', 80)->nullable();
            $table->integer('ordem_exibicao')->default(0);
            $table->boolean('ativo')->default(true);
            $table->dateTime('data_criacao_faq')->useCurrent();
            $table->dateTime('data_atualizacao_faq')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_faq');
    }
};
