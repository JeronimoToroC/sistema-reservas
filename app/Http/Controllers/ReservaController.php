<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;
use App\Http\Requests\ReservaRequest;

class ReservaController extends Controller
{
    public function index(Request $request)
    {
        $query = Reserva::query();

        if ($request->has('nombre_cliente')) {
            $nombreCliente = $request->input('nombre_cliente');
            $query->where('nombre_cliente', 'like', '%' . $nombreCliente . '%');
        }

        if ($request->has('confirmada')) {
            $confirmada = $request->input('confirmada');
            if ($confirmada === '1' || $confirmada === '0') {
                $query->where('confirmada', $confirmada);
            }
        }

        $reservas = $query->get();

        return view('reservas.index', compact('reservas'));
    }

    public function create()
    {
        return view('reservas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservaRequest $request)
    {
        $request->validate([
            'nombre_cliente' => 'required|string|max:255',
            'fecha_reserva' => 'required|date',
            'hora_reserva' => 'required|date_format:H:i',
            'comentarios' => 'nullable|string',
            'monto_total' => 'required|numeric|min:0',
            'cantidad_personas' => 'required|integer|min:1',
            'confirmada' => 'required|boolean',
            'correo_cliente' => 'required|email|max:255',
            'telefono_contacto' => 'required|string|max:20',
        ]);

        $reserva = new Reserva();
        $reserva->nombre_cliente = $request->nombre_cliente;
        $reserva->fecha_reserva = $request->fecha_reserva;
        $reserva->hora_reserva = $request->hora_reserva;
        $reserva->comentarios = $request->comentarios;
        $reserva->monto_total = $request->monto_total;
        $reserva->cantidad_personas = $request->cantidad_personas;
        $reserva->confirmada = $request->confirmada;
        $reserva->correo_cliente = $request->correo_cliente;
        $reserva->telefono_contacto = $request->telefono_contacto;

        $reserva->save();

        return redirect()->route('reservas.index');
    }



    /**
     * Display the specified resource.
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reserva $reserva)
    {
        $reserva->delete();
        return redirect('/reservas');
    }
}
