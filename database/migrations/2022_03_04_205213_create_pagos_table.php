<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',150);
            $table->datetime('fecha_consigna');
            $table->string('sucursal',10);


            $table->foreignId('id_tramite')->constrained('Tramites');
            $table->foreignId('id_forma_pago')->constrained('Forma_pagos');
            $table->foreignId('id_exento')->constrained('exentos');

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
        Schema::dropIfExists('pagos');
    }
}
