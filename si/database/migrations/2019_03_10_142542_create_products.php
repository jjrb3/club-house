<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->smallInteger('price');
            $table->boolean('big_size')->default(false);
            $table->boolean('medium_size')->default(false);
            $table->boolean('small_size')->default(false);

            $table->integer('category_product_id')->unsigned();
            $table->foreign('category_product_id')->references('id')->on('categories_product');

            $table->index(['category_product_id', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
