<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnfermedadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //si cambiamos el nombre a enfermedades podemos cambiar todos los nombres como en el tutorial
        //pero el ERROR es enfermedads que no esta en ninguna parte!!!!!!!!!!!!
        Schema::create('enfermedads', function (Blueprint $table) { //describimos los atributos de la tabla
            $table->increments('id'); //se crea un identificador incremental, se actuaizan los registros
            $table->string('nombre_enfermedad');
            $table->timestamps(); //cuando he insertado o borrado algo en la tabla
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enfermedads');
    }
}
