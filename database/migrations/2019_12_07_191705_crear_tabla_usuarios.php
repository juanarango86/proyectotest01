<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('Id_Usuario');
            $table->string('Nombre', 50);
            $table->string('Rol', 50);
            $table->string('Correo_Electronico', 100);
            $table->string('Contraseña', 20);
            $table->date('Fecha_Nacimiento');
            $table->string('Direccion', 100);
            $table->string('Telefono', 100);
            $table->string('Celular', 100);
<<<<<<< HEAD
            $table->nullableTimestamps();
=======
<<<<<<< qryeison
       
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
        Schema::dropIfExists('usuarios');
    }
}
