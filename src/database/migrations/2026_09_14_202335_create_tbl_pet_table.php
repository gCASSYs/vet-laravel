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
        Schema::create('tbl_pet', function (Blueprint $table) {
            $table->integer('id_pet', true);
            $table->integer('id_cliente')->index('fk_pet_cliente');
            $table->string('nome', 100);
            $table->string('especie', 50);
            $table->string('raca', 80);
            $table->string('sexo', 20);
            $table->date('data_nascimento');
            $table->decimal('peso', 5);
            $table->text('observacoes')->nullable();
            $table->boolean('ativo')->default(true);
            $table->dateTime('data_criacao_pet')->useCurrent();
            $table->dateTime('data_atualizacao_pet')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_pet');
    }
};
