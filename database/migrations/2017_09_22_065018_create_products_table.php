<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
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
            $table->string('producttitle');
            $table->string('sku');
            $table->string('brand');
            $table->string('category');
            $table->string('mrp');
            $table->string('offer');
            $table->Integer('quantity');
            $table->string('url');
            $table->string('image');
            $table->text('description')->nullable();
            $table->text('reviews')->nullable();
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
