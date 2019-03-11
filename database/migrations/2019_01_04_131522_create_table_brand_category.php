<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBrandCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_category', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('category_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->foreign('category_id')->references('categoryId')->on('categories')->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('brand_id')->references('brandId')->on('brands')->onDelete('cascade')
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
        Schema::dropIfExists('brand_category');
    }
}
