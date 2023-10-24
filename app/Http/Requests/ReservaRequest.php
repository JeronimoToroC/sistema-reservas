<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'nombre_cliente' => 'required|string|max:255',
            'fecha_reserva' => 'required|date',
            'hora_reserva' => 'required|date_format:H:i',
            'comentarios' => 'nullable|string',
            'monto_total' => 'required|numeric|min:0',
            'cantidad_personas' => 'required|integer|min:1',
            'confirmada' => 'required|boolean',
            'correo_cliente' => 'required|email|max:255',
            'telefono_contacto' => 'required|string|max:20',
        ];
    }
}
