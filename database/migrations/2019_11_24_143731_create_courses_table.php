<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Course_Title');
            $table->string('Course_Intro');
            $table->unsignedBigInteger('Teacher_Id');
            $table->integer('Num_Of_Chapters');
            $table->bigInteger('Course_Price');
            $table->unsignedBigInteger('Language_Id');
            $table->foreign('Teacher_Id')->references('User_Id')->on('teachers')->onDelete('cascade');
            $table->foreign('Language_Id')->references('id')->on('languages')->onDelete('cascade');
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
        Schema::dropIfExists('courses');
    }
}
