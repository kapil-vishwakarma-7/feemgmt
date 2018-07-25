<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_name');
            $table->string('email')->unique();
            $table->string('student_contact')->unique();
            $table->string('gender');
            $table->string('father_name');
            $table->string('father_mobile')->unique();
            $table->string('mother_name');
            $table->string('dob');
            $table->text('permanent_add')->nullable();
            $table->text('current_add')->nullable();
            $table->string('category');
            $table->string('cast');
            $table->string('medium');
            $table->string('adhar_no');
            $table->string('exam');
            $table->string('subject');
            $table->string('board');
            $table->string('year');
            $table->string('obtain_mark');
            $table->string('total_mark');
            $table->string('percentage');
            $table->string('image')->nullable();
            $table->string('image_marksheet')->nullable();
            $table->string('image_adhar')->nullable();
            $table->integer('course_id')->unsigned();
            $table->timestamps();
           
        });
         Schema::table('admissions', function($table){
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admissions');
    }
}
