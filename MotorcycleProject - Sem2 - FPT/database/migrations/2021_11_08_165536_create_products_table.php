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
        Schema::disableForeignKeyConstraints();
        Schema::create('products', function (Blueprint $table) {
            $table->increments('pro_id');
            $table->unsignedInteger('cate_id');
            $table->string('productName');
            $table->string('title',200);
            $table->string('description')->nullable();
            $table->integer('pro_old_price')->nullable();
            $table->integer('pro_new_price')->nullable();
            $table->boolean('pro_sale')->default(0);
            $table->integer('quantity')->nullable();

            $table->enum('status',['In Stock','Out of Stock']);
            $table->enum('productType',['1','2']);//0: product of people 1:product of motor
            $table->string('image',200)->nullable();
            $table->foreign('cate_id')->references('cate_id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('products');
        Schema::enableForeignKeyConstraints();
    }
}
