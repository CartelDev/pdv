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
        Schema::create('rua_has_usuario', function (Blueprint $table) {
            $table->unsignedBigInteger('id_rua_usuario');
            $table->unsignedBigInteger('id_usuario_rua');

            $table->foreign('id_rua_usuario')->references('id_rua')->on('ruas')->onDelete('cascade');
            $table->foreign('id_usuario_rua')->references('id_usuario')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rua_has_usuario');
    }
};
