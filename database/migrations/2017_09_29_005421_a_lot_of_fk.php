<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ALotOfFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        
         Schema::table('performances', function (Blueprint $table) {
            $table->integer('competence_id')->unsigned();
            $table->foreign('competence_id')->references('id')->on('competences');            
        });
        Schema::table('teachers', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            // $table->integer('course_id')->unsigned()->nullable();
            // $table->foreign('course_id')->references('id')->on('courses');            
        });
        Schema::table('students', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');            
        });
        Schema::table('reports', function (Blueprint $table) {
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('performances', function (Blueprint $table) {
            $table->dropForeign('performances_competence_id_foreign');            
        });
        Schema::table('teachers', function (Blueprint $table) {
            $table->dropForeign('teachers_user_id_foreign');
            // $table->dropForeign('teachers_course_id_foreign');
        });
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign('students_user_id_foreign');   
        });
        Schema::table('reports', function (Blueprint $table) {
            $table->dropForeign('reports_student_id_foreign');
        });        
    }
}

