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
        Schema::table('tbl_detalhe_servico', function (Blueprint $table) {
            $table->foreign(['id_servico'], 'fk_detalhe_servico_servico')->references(['id_servico'])->on('tbl_servico')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_detalhe_servico', function (Blueprint $table) {
            $table->dropForeign('fk_detalhe_servico_servico');
        });
    }
};
