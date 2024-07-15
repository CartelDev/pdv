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
        Schema::create('cliente_has_permissao', function (Blueprint $table) {
            $table->unsignedBigInteger('id_cliente_permissao');
            $table->unsignedBigInteger('id_permissao_cliente');
    
            $table->foreign('id_cliente_permissao')->references('id_cliente')->on('clientes')->onDelete('cascade');
            $table->foreign('id_permissao_cliente')->references('id_permissao')->on('permissoes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cargos_has_permissao');
    }
};
