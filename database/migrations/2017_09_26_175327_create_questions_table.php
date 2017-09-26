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
            $table->integer('tipo')->unsigned();//1 cerrada 2 abierta 3 subir archivo
            $table->string('descripcion');
            $table->integer('tiempo')->unsigned();
            $table->float('puntaje',2,2)->unsigned();                       
            $table->string('rpta',1)->nullable();
            $table->integer('tamano_arch')->unsigned()->nullable();
            $table->string('extension_arch')->nullable();
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
