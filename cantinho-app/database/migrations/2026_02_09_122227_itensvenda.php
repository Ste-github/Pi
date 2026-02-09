<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('itens_venda', function (Blueprint $table) {
            $table->id();

            // Chaves estrangeiras
            $table->foreignId('venda_id')
                  ->constrained('vendas')
                  ->cascadeOnDelete(); // apaga itens quando a venda for apagada

            $table->foreignId('produto_id')
                  ->constrained('produtos');

            $table->integer('quantidade');
            $table->decimal('preco_unitario', 10, 2);
            $table->decimal('subtotal', 10, 2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itens_venda');
    }
};
