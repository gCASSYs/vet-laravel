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
        Schema::table('tbl_agendamento', function (Blueprint $table) {
            $table->foreign(['id_cliente'], 'fk_agendamento_cliente')->references(['id_cliente'])->on('tbl_cliente')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_pet'], 'fk_agendamento_pet')->references(['id_pet'])->on('tbl_pet')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_servico'], 'fk_agendamento_servico')->references(['id_servico'])->on('tbl_servico')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_agendamento', function (Blueprint $table) {
            $table->dropForeign('fk_agendamento_cliente');
            $table->dropForeign('fk_agendamento_pet');
            $table->dropForeign('fk_agendamento_servico');
        });
    }
};
