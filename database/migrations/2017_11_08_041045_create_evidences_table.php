<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvidencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evidences', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechasubida')->nullable();
            $table->date('fechalimite');
            $table->integer('estado');//1 corregido, 2 en observacion, 3 sin evidencia
            $table->string('comentario')->nullable();
            $table->string('indicaciones');
            $table->string('observaciones')->nullable();
            $table->integer('puntaje')->nullable();
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
        Schema::dropIfExists('evidences');
    }
}
