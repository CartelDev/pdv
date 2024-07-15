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
        Schema::create('venda_has_pagamento', function (Blueprint $table) {
            $table->unsignedBigInteger('id_venda_pagamento');
            $table->unsignedBigInteger('id_pagamento_venda');

            $table->foreign('id_venda_pagamento')->references('id_venda')->on('vendas')->onDelete('cascade');
            $table->foreign('id_pagamento_venda')->references('id_pagamento')->on('pagamentos')->onDelete('cascade');
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
