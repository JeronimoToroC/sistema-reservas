@extends('layouts.template')

@section('content')
    <div class="container mb-10">
        <h1 class="fs-1 mb-10 border-bottom">Crear Reserva</h1>
        <form action="{{ route('reservas.store') }}" method="POST" class="w-50">
            @csrf
            <div class="mb-3">
                <label for="nombre_cliente" class="form-label">Nombre del Cliente</label>
                <input type="text" class="form-control" name="nombre_cliente" id="nombre_cliente" required>
            </div>
            <div class="mb-3">
                <label for="fecha_reserva" class="form-label">Fecha de Reserva</label>
                <input type="date" class="form-control" name="fecha_reserva" id="fecha_reserva" required>
            </div>
            <div class="mb-3">
                <label for="hora_reserva" class="form-label">Hora de Reserva</label>
                <input type="time" class="form-control" name="hora_reserva" id="hora_reserva" required>
            </div>
            <div class="mb-3">
                <label for="comentarios" class="form-label">Comentarios</label>
                <textarea class="form-control" name="comentarios" id="comentarios"></textarea>
            </div>
            <div class="mb-3">
                <label for="monto_total" class="form-label">Monto Total</label>
                <input type="text" class="form-control" name="monto_total" id="monto_total" required>
            </div>
            <div class="mb-3">
                <label for="cantidad_personas" class="form-label">Cantidad de Personas</label>
                <input type="number" class="form-control" name="cantidad_personas" id="cantidad_personas" required>
            </div>
            <div class="mb-3">
                <label for="confirmada" class="form-label">Confirmada</label>
                <select class="form-select" name="confirmada" id="confirmada" required>
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="correo_cliente" class="form-label">Correo del Cliente</label>
                <input type="email" class="form-control" name="correo_cliente" id="correo_cliente" required>
            </div>
            <div class="mb-3">
                <label for="telefono_contacto" class="form-label">Teléfono de Contacto</label>
                <input type="text" class="form-control" name="telefono_contacto" id="telefono_contacto" required>
            </div>
            <div class="form-group my-2">
                <a href="/reservas" class="btn btn-outline-secondary">Cancel</a>
                <button type="submit" class="btn btn-outline-success">Guardar Reserva</button>
            </div>
        </form>
    </div>
@endsection
