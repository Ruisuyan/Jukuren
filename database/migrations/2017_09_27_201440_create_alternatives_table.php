<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlternativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternatives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion',1);
            $table->string('descripcion');            
            $table->timestamps();
        });

        //FK
        Schema::table('alternatives', function (Blueprint $table) {
            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('questions');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alternatives', function (Blueprint $table) {
            $table->dropForeign('alternatives_question_id_foreign');
        });
        Schema::dropIfExists('alternatives');
    }
}
