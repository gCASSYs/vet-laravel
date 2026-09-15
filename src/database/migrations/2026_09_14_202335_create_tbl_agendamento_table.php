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
        Schema::create('tbl_agendamento', function (Blueprint $table) {
            $table->integer('id_agendamento', true);
            $table->integer('id_cliente')->index('fk_agendamento_cliente');
            $table->integer('id_pet')->index('fk_agendamento_pet');
            $table->integer('id_servico')->index('fk_agendamento_servico');
            $table->date('data_solicitada');
            $table->time('horario_solicitado');
            $table->string('status', 40)->default('EM_AVALIACAO');
            $table->text('observacao_cliente')->nullable();
            $table->text('observacao_clinica')->nullable();
            $table->dateTime('data_solicitacao')->useCurrent();
            $table->dateTime('data_confirmacao')->nullable();
            $table->dateTime('data_atualizacao_agendamento')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_agendamento');
    }
};
