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
        Schema::create('vendas', function (Blueprint $table) {
            $table->id(); 

            $table->foreignId('funcionario_id')->constrained('users');
            $table->foreignId('atendente_id')->nullable()->constrained('users');
            $table->foreignId('cliente_id')->nullable()->constrained('clientes');

            $table->decimal('subtotal', 10, 2);
            $table->decimal('desconto', 10, 2)->default(0);
            $table->decimal('total', 10, 2);

            $table->string('forma_pagamento')->nullable();
            $table->timestamp('data_venda')->useCurrent();

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
        Schema::dropIfExists('vendas');
    }
};
