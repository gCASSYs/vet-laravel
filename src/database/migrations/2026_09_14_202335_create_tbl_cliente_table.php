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
        Schema::create('tbl_cliente', function (Blueprint $table) {
            $table->integer('id_cliente', true);
            $table->string('nome', 120);
            $table->string('email', 120)->unique('email');
            $table->string('telefone', 30)->nullable();
            $table->string('senha');
            $table->boolean('ativo')->default(true);
            $table->dateTime('data_cadastro')->useCurrent();
            $table->dateTime('data_atualizacao_cliente')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_cliente');
    }
};
