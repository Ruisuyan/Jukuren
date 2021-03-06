<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('tipo');//1 cerrada 2 abierta
            $table->boolean('utilizado');//1 no usado, 2 usado
            $table->text('enunciado');
            // $table->integer('tiempo');//en minutos
            $table->integer('proporcion');                                   
            $table->integer('respuestaCerrada')->nullable();
            $table->softDeletes();                        
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
        Schema::dropIfExists('questions');
    }
}
