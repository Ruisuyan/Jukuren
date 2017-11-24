<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlineevaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onlineevaluations', function (Blueprint $table) {
            $table->increments('id');            
            $table->text('observaciones');
            $table->date('fechaResolucion');            
            $table->boolean('estado'); //entre pendiente corregida cancelada            
            $table->integer('puntaje');
            $table->softDeletes();
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
        Schema::dropIfExists('onlineevaluations');
    }
}
