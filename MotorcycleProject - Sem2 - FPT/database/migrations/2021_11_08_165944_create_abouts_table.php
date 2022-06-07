<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //table about
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('aboutCode',200)->unique();
            $table->string('header',200)->nullable();
            $table->string('container',200)->nullable();
            $table->string('footer',50)->nullable();
            $table->string('createdBy',200)->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
