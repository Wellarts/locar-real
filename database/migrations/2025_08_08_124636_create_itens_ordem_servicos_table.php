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
        Schema::create('itens_ordem_servicos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ordem_servico_id')->constrained()->onDelete('cascade');
            $table->foreignId('peca_servico_id')->constrained()->onDelete('cascade');
            $table->string('descricao');
            $table->string('tipo');
            $table->integer('quantidade');
            $table->decimal('valor_unitario', 10, 2);
            $table->decimal('valor_total', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itens_ordem_servicos');
    }
};
