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
        Schema::create('tbl_horario_servico', function (Blueprint $table) {
            $table->integer('id_horario', true);
            $table->integer('id_servico')->index('fk_horario_servico_servico');
            $table->string('dia_semana', 50);
            $table->time('horario_inicio')->nullable();
            $table->time('horario_fim')->nullable();
            $table->boolean('atendimento_24h')->default(false);
            $table->string('observacao')->nullable();
            $table->boolean('ativo')->default(true);
            $table->dateTime('data_criacao_horario')->useCurrent();
            $table->dateTime('data_atualizacao_horario')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_horario_servico');
    }
};
