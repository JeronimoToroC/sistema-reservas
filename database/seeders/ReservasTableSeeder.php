<?php

namespace Database\Seeders;

use App\Models\Reserva;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('reservas')->insert([
            'nombre_cliente' => 'Ana López',
            'fecha_reserva' => '2023-10-26',
            'hora_reserva' => '18:30:00',
            'comentarios' => 'Mesa para aniversario',
            'monto_total' => 150.00,
            'cantidad_personas' => 6,
            'confirmada' => true,
            'correo_cliente' => 'ana@example.com',
            'telefono_contacto' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('reservas')->insert([
            'nombre_cliente' => 'Juan Pérez',
            'fecha_reserva' => '2023-10-27',
            'hora_reserva' => '20:00:00',
            'comentarios' => 'Reserva para cena de negocios',
            'monto_total' => 200.00,
            'cantidad_personas' => 4,
            'confirmada' => true,
            'correo_cliente' => 'juan@example.com',
            'telefono_contacto' => '987-654-3210',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('reservas')->insert([
            'nombre_cliente' => 'María Rodríguez',
            'fecha_reserva' => '2023-10-28',
            'hora_reserva' => '19:15:00',
            'comentarios' => 'Reserva para aniversario de bodas',
            'monto_total' => 120.00,
            'cantidad_personas' => 2,
            'confirmada' => false,
            'correo_cliente' => 'maria@example.com',
            'telefono_contacto' => '555-123-4567',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Reserva::factory()->count(10)->create();
    }
}
