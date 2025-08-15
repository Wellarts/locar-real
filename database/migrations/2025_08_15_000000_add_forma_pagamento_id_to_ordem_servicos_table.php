<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('ordem_servicos', function (Blueprint $table) {
           // $table->unsignedBigInteger('forma_pagamento_id')->nullable()->after('fornecedor_id');
            // Se quiser criar a foreign key:
             $table->foreignId('forma_pagamento_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ordem_servicos', function (Blueprint $table) {
            $table->dropColumn('forma_pagamento_id');
            // Se criou a foreign key:
            // $table->dropForeign(['forma_pagamento_id']);
        });
    }
};
