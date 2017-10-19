<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->date('fechaInicio');
            $table->date('fechaFin')->nullable();
            $table->integer('duracion');
            $table->integer('estado'); //entre pendiente corregida cancelada
            $table->string('lugar');
            $table->integer('peso');
            $table->timestamps();
        });
        //'fecha_inicio','fecha_fin','nombre','descripcion','tiempo'
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluations');
    }
}
