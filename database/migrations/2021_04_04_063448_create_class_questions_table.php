<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_questions', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');

            $table->integer('id_class')->unsigned();
            $table->integer('id_quest')->unsigned();

            $table->timestamps();

            $table->foreign('id_class')->references('id')->on('classes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_quest')->references('id')->on('questions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_questions');
    }
}
