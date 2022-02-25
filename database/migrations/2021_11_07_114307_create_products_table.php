<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('title');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->bigInteger('price');
            $table->string('oldprice')->nullable();
            $table->string('sku');
            $table->string('photo');
            $table->longText('gallery')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->longText('description')->nullable();
            $table->longText('size')->nullable();
            $table->longText('color')->nullable();
            $table->longText('quantity')->nullable();
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
