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
        Schema::create('venda_has_produto', function (Blueprint $table) {
            $table->unsignedBigInteger('id_venda_produto');
            $table->unsignedBigInteger('id_produto_venda');

            $table->foreign('id_venda_produto')->references('id_venda')->on('vendas')->onDelete('cascade');
            $table->foreign('id_produto_venda')->references('id_produto')->on('produtos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venda_has_produto');
    }
};
