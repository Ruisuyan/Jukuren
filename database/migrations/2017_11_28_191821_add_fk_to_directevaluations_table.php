<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToDirectevaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('directevaluations', function (Blueprint $table) {
            $table->integer('evaluation_id')->unsigned()->nullable();
            $table->foreign('evaluation_id')->references('id')->on('evaluations');
            $table->integer('student_id')->unsigned()->nullable();
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
        Schema::table('directevaluations', function (Blueprint $table) {
            $table->dropForeign('directevaluations_evaluation_id_foreign');
            $table->dropForeign('directevaluations_student_id_foreign');
        });
    }
}
