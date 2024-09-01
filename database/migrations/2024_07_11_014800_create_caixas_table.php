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
        Schema::create('caixas', function (Blueprint $table) {
            $table->id('id_caixa')->autoincrement();
            $table->dateTime('data_abertura');
            $table->dateTime('data_fechamento');
            $table->double('valor_abertura');
            $table->double('valor_fechamento');
            $table->foreignId('id_funcionario')->references('id_funcionario')->on('funcionarios');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caixas');
    }
};
