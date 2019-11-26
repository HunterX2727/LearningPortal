<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLearningProgressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learning_progresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Enrollment_Id');
            $table->unsignedBigInteger('Course_Chapter_Content_Id');
            $table->boolean('Status');
            $table->foreign('Enrollment_Id')->references('id')->on('enrollments');
            $table->foreign('Course_Chapter_Content_Id')->references('id')->on('course_chapter_contents');
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
        Schema::dropIfExists('learning_progresses');
    }
}
