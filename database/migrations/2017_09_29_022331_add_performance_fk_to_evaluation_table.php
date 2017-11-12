<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPerformanceFkToEvaluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('onlineevaluations', function (Blueprint $table) {
            $table->integer('performance_id')->unsigned();
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
        Schema::table('onlineevaluations', function (Blueprint $table) {
            $table->dropForeign('onlineevaluations_performance_id_foreign');
        });
    }
}
