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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cate_id');
            $table->string('product_name');
            $table->string('title')->nullable();
            $table->mediumText('small_description')->nullable();
            $table->longText('description');
            $table->string('price');
            $table->string('discount_price')->nullable();
            $table->string('image')->nullable();
            $table->string('quantity')->nullable();
            $table->string('available_time')->nullable();
            $table->tinyInteger('status')->nullable()->default('0');
            $table->tinyInteger('trending')->nullable()->default('0');
            $table->tinyInteger('mostpopular')->nullable()->default('0');
            $table->tinyInteger('bestseller')->nullable()->default('0');
            $table->tinyInteger('featured')->nullable()->default('0');
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->timestamps();
            $table->foreign('cate_id')->references('id')->on('categories')->onDelete('cascade');
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
};
