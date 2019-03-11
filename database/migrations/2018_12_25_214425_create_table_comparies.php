<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableComparies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comparies', function (Blueprint $table) {
            $table->increments('compareId');
            $table->integer('user_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->foreign('user_id')->references('userId')->on('users')->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('product_id')->references('productId')->on('products')->onDelete('cascade')
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
        Schema::dropIfExists('comparies');
    }
}
