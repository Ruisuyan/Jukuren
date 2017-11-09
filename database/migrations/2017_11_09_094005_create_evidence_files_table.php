<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvidencefilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evidencefiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('extension');
            $table->integer('evidence_id')->unsigned();
            $table->foreign('evidence_id')->references('id')->on('evidences');
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
        Schema::table('evidencefiles', function (Blueprint $table) {
            $table->dropForeign('evidencefiles_evidence_id_foreign');
        });
        Schema::dropIfExists('evidencefiles');
    }
}
