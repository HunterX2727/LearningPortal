<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->unsignedBigInteger('User_Id');
            $table->string('Qualifications')->nullable();
            $table->string('Brief_Intro')->nullable();
            $table->integer('Num_Of_Published_Courses');
            $table->integer('Num_OF_Enrolled_Students');
            $table->integer('Average_Review_Rating');
            $table->integer('Num_Of_Reviews');
            $table->foreign('User_Id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('teachers');
    }
}
