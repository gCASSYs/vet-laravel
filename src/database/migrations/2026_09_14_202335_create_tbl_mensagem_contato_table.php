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
        Schema::create('tbl_mensagem_contato', function (Blueprint $table) {
            $table->integer('id_mensagem', true);
            $table->string('nome', 120);
            $table->string('email', 120);
            $table->string('telefone', 30)->nullable();
            $table->string('assunto', 80);
            $table->text('mensagem');
            $table->string('status', 30)->default('NOVA');
            $table->dateTime('data_envio')->useCurrent();
            $table->dateTime('data_atualizacao_mensagem')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_mensagem_contato');
    }
};
