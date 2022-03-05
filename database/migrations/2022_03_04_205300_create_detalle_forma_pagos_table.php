<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleFormaPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_forma_pagos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_detalle_pago',50);
            $table->integer('sucursal');
            $table->integer('valor');
            $table->integer('pin');


            $table->foreignId('id_pago')->constrained('Pagos');


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
        Schema::dropIfExists('detalle_forma_pagos');
    }
}
