<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('address');
            $table->integer('zipcode');
            $table->binary('image');
            $table->string('question_two');
            $table->string('question_three');
            $table->string('question_four');
            $table->string('question_five');
            $table->string('question_six');
            $table->string('question_seven');
            $table->string('question_eight');
            $table->integer('administrator');
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
        Schema::dropIfExists('events');
    }
}
