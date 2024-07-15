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
        Schema::create('compra_has_produto', function (Blueprint $table) {
            $table->unsignedBigInteger('id_compra_produto');
            $table->unsignedBigInteger('id_produto_compra');
            $table->integer('quantidade_compra');
            $table->float('preco_compra');
            $table->foreign('id_compra_produto')->references('id_compra')->on('compras')->onDelete('cascade');
            $table->foreign('id_produto_compra')->references('id_produto')->on('produtos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('venda_has_pagamento');
    }
};
