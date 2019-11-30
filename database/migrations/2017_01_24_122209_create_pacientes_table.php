<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //Creamos una tabla que tiene una serie de campos
    {
        Schema::create('pacientes', function (Blueprint $table) { //describimos los atributos de la tabla
            $table->increments('id'); //se crea un identificador incremental, se actuaizan los registros
            $table->string('name');
            $table->string('surname');
            $table->string('nuhsa');
            $table->timestamps(); //cuando he insertado o borrado algo en la tabla
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //Cuando quiero deshacer la migracion quiero eliminar la tabla
    {
        Schema::drop('pacientes');
    }
}
