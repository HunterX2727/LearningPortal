<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseChapterContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_chapter_contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Course_Chapter_Id');
            $table->unsignedBigInteger('Content_Type_Id');
            $table->boolean('Is_mandatory');
            $table->integer('Time_Required_In_Seconds');
            $table->boolean('Is_Free');
            $table->foreign('Course_Chapter_Id')->references('id')->on('course_chapters');
            $table->foreign('Content_Type_Id')->references('id')->on('content_types');
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
        Schema::dropIfExists('course_chapter_contents');
    }
}
