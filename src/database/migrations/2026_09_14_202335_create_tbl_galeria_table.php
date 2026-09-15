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
        Schema::create('tbl_galeria', function (Blueprint $table) {
            $table->integer('id_imagem', true);
            $table->string('titulo', 120)->nullable();
            $table->text('descricao')->nullable();
            $table->string('imagem');
            $table->string('categoria', 80)->nullable();
            $table->integer('ordem_exibicao')->default(0);
            $table->boolean('ativo')->default(true);
            $table->dateTime('data_criacao_galeria')->useCurrent();
            $table->dateTime('data_atualizacao_galeria')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_galeria');
    }
};
