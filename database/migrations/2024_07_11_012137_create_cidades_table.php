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
        Schema::create('cidades', function (Blueprint $table) {
            $table->id('id_cidade')->autoincrement();
            $table->string('nome_cidade', 100);
            $table->string('sigla_cidade', 5);
            $table->string('observacao_cidade', 100);
            $table->foreignId('id_estado')->references('id_estado')->on('estados');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cidades');
    }
};
