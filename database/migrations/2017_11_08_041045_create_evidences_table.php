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
            $table->date('fechasubida');            
            $table->boolean('estado');//1 corregido, 2 observandose
            $table->text('comentario')->nullable();            
            $table->text('observaciones')->nullable();
            $table->integer('puntaje')->nullable();
            $table->string('nombreArchivo');
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
