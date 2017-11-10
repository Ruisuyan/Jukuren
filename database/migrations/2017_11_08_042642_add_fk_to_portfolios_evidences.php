<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToPortfoliosEvidences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students');
        });
        Schema::table('evidences', function (Blueprint $table) {
            $table->integer('portfolio_id')->unsigned()->nullable();
            $table->foreign('portfolio_id')->references('id')->on('portfolios');
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
        Schema::table('portfolios', function (Blueprint $table) {
            $table->dropForeign('portfolios_student_id_foreign');
        });
        Schema::table('evidences', function (Blueprint $table) {
            $table->dropForeign('evidences_portfolio_id_foreign');
            $table->dropForeign('evidences_performance_id_foreign');
        });
    }
}
