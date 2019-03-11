<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('productId');
            $table->integer('category_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->integer('offer_id')->unsigned();
            $table->string('productName');
            $table->string('productDetails');
            $table->integer('prductQuantity');
            $table->integer('productPrice');
            $table->integer('productStatus');
            $table->foreign('category_id')->references('categoryId')->on('categories')->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('brand_id')->references('brandId')->on('brands')->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('offer_id')->references('offerId')->on('offers')->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('products');
    }
}
