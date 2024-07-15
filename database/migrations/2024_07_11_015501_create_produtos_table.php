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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id('id_produto')->autoincrement();
            $table->string('nome_produto');
            $table->double('preco_compra');
            $table->double('preco_venda');
            $table->string('descricao_produto');
            $table->integer('estoque_atual');
            $table->integer('estoque_minimo');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
