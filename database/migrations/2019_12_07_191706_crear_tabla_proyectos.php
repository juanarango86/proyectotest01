<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaProyectos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('Id_Proyecto');
            $table->string('Nombre_Proyecto', 100);
            $table->string('Descripcion', 500);
            $table->unsignedInteger('Id_Cliente');
            $table->foreign('Id_Cliente','FK_proyectos_clientes')->references('Id_Cliente')->on('clientes');
            $table->integer('Cantidad_De_Encuestas');
            $table->integer('Id_Tipo_De_Poblacion');
            $table->boolean('Estado');
<<<<<<< HEAD
            $table->nullableTimestamps();
=======
<<<<<<< qryeison
            $table->nullableTimestamps();
=======
>>>>>>> master
>>>>>>> 184a9b6ab64c4425a7ee6e8300dc88839e1faf0b
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
