<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFksToEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('evaluations', function (Blueprint $table) {
            $table->integer('performance_id')->unsigned();
            $table->foreign('performance_id')->references('id')->on('performances');
            $table->integer('schedule_id')->unsigned();
            $table->foreign('schedule_id')->references('id')->on('schedules');
            $table->integer('teacher_id')->unsigned();
            $table->foreign('teacher_id')->references('id')->on('teachers');
        });
        Schema::table('onlineevaluations', function (Blueprint $table) {
            $table->integer('poll_id')->unsigned();
            $table->foreign('poll_id')->references('id')->on('students');            
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students');
        });
        Schema::table('levels', function (Blueprint $table) {
            $table->integer('evaluation_id')->unsigned();
            $table->foreign('evaluation_id')->references('id')->on('evaluations');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evaluations', function (Blueprint $table) {
            $table->dropForeign('evaluations_performance_id_foreign');
            $table->dropForeign('evaluations_schedule_id_foreign');
            $table->dropForeign('evaluations_teacher_id_foreign');            
        });
        Schema::table('levels', function (Blueprint $table) {
            $table->dropForeign('levels_evaluation_id_foreign');            
        });
        Schema::table('onlineevaluations', function (Blueprint $table) {
            $table->dropForeign('onlineevaluations_poll_id_foreign');
            $table->dropForeign('students_poll_id_foreign');          
        });
    }
}
