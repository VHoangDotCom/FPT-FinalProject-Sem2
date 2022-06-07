<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //table feedback
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('feedbackCode',200)->unique();
            $table->string('name',200)->nullable();
            $table->string('phone',200)->nullable();
            $table->string('email',50);
            $table->string('address',200)->nullable();
            $table->text('content',200)->nullable();

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
        Schema::dropIfExists('feedback');
    }
}
