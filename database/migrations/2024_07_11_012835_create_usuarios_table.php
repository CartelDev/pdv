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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usuario')->autoincrement();
            $table->string('nome_usuario', 100);
            $table->string('sobrenome_usuario', 100);
            $table->string('usuario', 100);
            $table->string('senha_usuario', 100);
            $table->string('email_usuario', 100);
            $table->string('numero_residencia', 100);
            $table->string('cpf_usuario', 100);
            $table->boolean('usuario_ativo', 100);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
