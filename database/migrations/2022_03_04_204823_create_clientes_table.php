<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->integer('nuip',);
            $table->string('nombre_uno',80);
            $table->string('nombre_dos',80);
            $table->string('apellido_uno',80);
            $table->string('apellido_dos',80);
            $table->string('sexo',1);


            $table->timestamps();
        });
    }

    /**
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
