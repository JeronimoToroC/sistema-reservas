<?php

namespace Database\Factories;

use App\Models\Reserva;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservaFactory extends Factory
{
    protected $model = Reserva::class;

    public function definition()
    {
        return [
            'nombre_cliente' => $this->faker->name,
            'fecha_reserva' => $this->faker->date,
            'hora_reserva' => $this->faker->time,
            'comentarios' => $this->faker->sentence,
            'monto_total' => $this->faker->randomFloat(2, 50, 500),
            'cantidad_personas' => $this->faker->numberBetween(1, 10),
            'confirmada' => $this->faker->boolean,
            'correo_cliente' => $this->faker->unique()->safeEmail,
            'telefono_contacto' => $this->faker->phoneNumber,
        ];
    }
}
