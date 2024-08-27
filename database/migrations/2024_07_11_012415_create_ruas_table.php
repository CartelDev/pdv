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
        Schema::create('ruas', function (Blueprint $table) {
            $table->id('id_rua')->autoincrement();
            $table->string('nome_rua', 100);
            $table->string('cep_rua', 9);
            $table->string('observacao_rua', 100);
            $table->foreignId('id_cidade')->references('id_cidade')->on('cidades');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruas');
    }
};
