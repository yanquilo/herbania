<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familia', function (Blueprint $table) {
            $table->integer('famId', true);
            $table->dateTime('fechaBono')->nullable();
            $table->enum('categoria', ['Padre', 'Madre', 'Hija', 'Hijo']);
            $table->enum('estadoCivil', ['Casado', 'Divorsiado', 'Viudo', 'Soltero']);
            $table->string('nacionalidad', 45)->nullable();
            $table->string('profesion', 100)->nullable();
            $table->string('provincia', 45)->nullable();
            $table->string('direccion', 200)->nullable();
            $table->string('poblacion', 45)->nullable();
            $table->integer('CP')->nullable();
            $table->string('email', 45)->nullable();
            $table->string('telefono1', 9)->nullable();
            $table->string('telefono2', 9)->nullable();
            $table->string('telefono3', 9)->nullable();
            $table->string('entidad', 24)->nullable();
            $table->string('oficina', 45)->nullable();
            $table->string('dc', 45)->nullable();
            $table->string('cuenta', 10)->nullable();
            $table->string('observaciones', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('familia');
    }
}
