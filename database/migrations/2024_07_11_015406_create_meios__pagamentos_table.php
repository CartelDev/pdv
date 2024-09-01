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
        Schema::create('meios_pagamentos', function (Blueprint $table) {
            $table->id('id_meio_pagamento')->autoincrement();
            $table->string('meio_pagamento', 100);
            $table->string('descricao_meio_pagamento', 100);
            $table->string('status_meio_pagamento', 100);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meios__pagamentos');
    }
};
