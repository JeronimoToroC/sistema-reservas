<?php

namespace Database\Seeders;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_cliente');
            $table->date('fecha_reserva');
            $table->time('hora_reserva');
            $table->text('comentarios')->nullable();
            $table->decimal('monto_total', 10, 2);
            $table->integer('cantidad_personas');
            $table->boolean('confirmada');
            $table->string('correo_cliente');
            $table->string('telefono_contacto');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservas');
    }
};
