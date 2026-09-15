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
        Schema::create('tbl_configuracao_site', function (Blueprint $table) {
            $table->integer('id_configuracao', true);
            $table->string('nome_clinica', 120);
            $table->string('logo')->nullable();
            $table->text('descricao_footer')->nullable();
            $table->string('email', 120)->nullable();
            $table->string('telefone', 30)->nullable();
            $table->string('whatsapp', 30)->nullable();
            $table->string('endereco', 180)->nullable();
            $table->string('cidade', 80)->nullable();
            $table->char('estado', 2)->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->dateTime('data_criacao_configuracao')->useCurrent();
            $table->dateTime('data_atualizacao_configuracao')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_configuracao_site');
    }
};
