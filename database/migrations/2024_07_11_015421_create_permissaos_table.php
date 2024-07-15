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
        Schema::create('permissoes', function (Blueprint $table) {
            $table->id('id_permissao')->autoincrement();
            $table->string('nome_permissao', 100);
            $table->string('tabela_referencia', 100);
            $table->boolean('inserir');
            $table->boolean('atualizar');
            $table->boolean('excluir');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissaos');
    }
};
