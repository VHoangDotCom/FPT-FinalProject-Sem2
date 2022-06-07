<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->integer('user_id');
            $table->string('name');
            $table->string('email');
            $table->string('description')->nullable();
            $table->string('phone');
            $table->string('address');
            $table->string('district');
            $table->string('ward');
            $table->string('city');
            $table->string('total');
            $table->integer('quantity');
            $table->tinyInteger('pay_method');
            $table->string('card_name');
            $table->string('card_number');
            $table->string('expiration');
            $table->string('secure_code');
            $table->tinyInteger('status')->default(0);//0:dang xu ly 1:dang giao hang 2:da nhan hang
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
