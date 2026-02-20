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
        //Criar o meu schema
        Schema::create('produtos', function (Blueprint $table){
            $table->increments('id');
            $table->longText('nomeProduto');
            $table->decimal('valor', 10, 2);
            $table->decimal('valorDesconto', 10, 2);
            $table->integer('estoque');
            $table->timestamps();
        });
    }//Fim do up

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('produtos');
    }//Fim do down
};