<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Produto: ID, SKU, Nome, Descrição e Preço
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sku');
            $table->string('nome');
            $table->text('descricao');
            $table->double('preco');
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
        Schema::dropIfExists('product');
    }
}
