<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->integer('idpersonas')->primary();
            $table->char('dniNie', 9)->nullable()->unique('dniNie_UNIQUE');
            $table->string('nombre', 100);
            $table->string('apellido1', 100);
            $table->string('apellido2', 100);
            $table->dateTime('fechNac');
            $table->dateTime('invInicio');
            $table->dateTime('invFinal');
            $table->string('notas', 250)->nullable();
            $table->integer('familia_famId')->index('famId_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
