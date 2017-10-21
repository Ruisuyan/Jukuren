<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToCoursexPerformanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coursexperformance', function (Blueprint $table) {
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('performance_id')->references('id')->on('performances');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coursexperformance', function (Blueprint $table) {
            $table->dropForeign('coursexperformance_course_id_foreign');
            $table->dropForeign('coursexperformance_performance_id_foreign');            
        });
    }
}
