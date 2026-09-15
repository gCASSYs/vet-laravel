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
        Schema::create('tbl_depoimento', function (Blueprint $table) {
            $table->integer('id_depoimento', true);
            $table->integer('id_cliente')->index('fk_depoimento_cliente');
            $table->string('tipo_cliente', 80)->nullable();
            $table->text('mensagem');
            $table->integer('ordem_exibicao')->default(0);
            $table->boolean('ativo')->default(false);
            $table->dateTime('data_criacao_depoimento')->useCurrent();
            $table->dateTime('data_atualizacao_depoimento')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_depoimento');
    }
};
