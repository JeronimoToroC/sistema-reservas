@extends('layouts.template')

@section('content')
    <h1 class="fs-1 mb-10 border-bottom">Lista de Reservas</h1>
    <div class="container mt-2">
        <div class="mb-4">
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-text" id="nombre_cliente-addon"><i class="bi bi-person"></i></span>
                        <input type="text" name="nombre_cliente" class="form-control" placeholder="Nombre del Cliente"
                            aria-describedby="nombre_cliente-addon">
                    </div>
                </div>
                <div class="col-md-4">
                    <select name="confirmada" class="form-select" aria-label="Estado de Confirmación">
                        <option value="">Todas las reservas</option>
                        <option value="1">Confirmadas</option>
                        <option value="0">Pendientes</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-outline-secondary">Filtrar</button>
                    <a href="{{ route('reservas.create') }}" class="btn btn-outline-primary ml-2">Crear Reserva</a>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($reservas as $reserva)
                <div class="col-md-4">
                    <div class="card mb-3 @if ($reserva->confirmada) border-success @else border-danger @endif">
                        <div class="card-body">
                            <h5 class="card-title">{{ $reserva->nombre_cliente }}</h5>
                            <p class="card-text"><strong>Fecha de Reserva:</strong> {{ $reserva->fecha_reserva }}</p>
                            <p class="card-text"><strong>Hora de Reserva:</strong> {{ $reserva->hora_reserva }}</p>
                            <div class="d-inline-flex justify-content-center p-2">
                                @if ($reserva->confirmada)
                                    <p class="card-text text-success"><strong>Confirmada</strong></p>
                                @else
                                    <p class="card-text text-danger"><strong>Pendiente</strong></p>
                                @endif
                                <form action="{{ route('reservas.destroy', $reserva) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger ml-2"
                                        onclick="return confirm('¿Estás seguro de eliminar esta reserva?')">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
