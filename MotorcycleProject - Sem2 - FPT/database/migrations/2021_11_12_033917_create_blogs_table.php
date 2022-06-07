<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{

    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('blogCode',200);
            $table->string('title',200)->nullable();
            $table->string('image',200)->nullable();
            $table->text('description',)->nullable();
            $table->text('content')->nullable();
            $table->string('createdBy',200)->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
