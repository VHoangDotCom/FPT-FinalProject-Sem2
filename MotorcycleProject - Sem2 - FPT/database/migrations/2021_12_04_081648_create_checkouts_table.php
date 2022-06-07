<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('orders', function (Blueprint $table) {
            $table->unsignedInteger('check_id')->autoIncrement();
            $table->unsignedInteger('checks_id');
            $table->string('pro_name');
            $table->integer('quantity');
            $table->integer('total_price');
            $table->timestamps();
            $table->foreign('checks_id')->references('id')->on('checkouts')->onDelete('cascade');
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
        Schema::dropIfExists('checkouts');
        Schema::enableForeignKeyConstraints();
    }
}
