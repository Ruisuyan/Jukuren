<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('questionId');
            $table->text('respuestaAbierta')->nullable();
            $table->integer('respuestaCerrada')->nullable();
            $table->text('observaciones')->nullable();
            $table->integer('puntaje')->nullable();
            $table->integer('onlineevaluation_id')->unsigned()->nullable();
            $table->foreign('onlineevaluation_id')->references('id')->on('onlineevaluations');
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
        Schema::dropIfExists('answers');
    }
}
