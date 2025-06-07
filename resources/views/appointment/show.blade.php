@extends('adminlte::page')

@section('title', $appointment->name ?? 'Ver Cita')

@section('content_header')
    <h1>Ver Cita</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span class="card-title">Detalle de la Cita</span>
            <a class="btn btn-primary btn-sm" href="{{ route('appointments.index') }}">Volver</a>
        </div>

        <div class="card-body bg-white">
            <div class="form-group mb-2">
                <strong>ID del Paciente:</strong>
                {{ $appointment->patient_id }}
            </div>
            <div class="form-group mb-2">
                <strong>ID del Doctor:</strong>
                {{ $appointment->doctor_id }}
            </div>
            <div class="form-group mb-2">
                <strong>Fecha:</strong>
                {{ $appointment->date }}
            </div>
            <div class="form-group mb-2">
                <strong>Hora:</strong>
                {{ $appointment->time }}
            </div>
            <div class="form-group mb-2">
                <strong>Estado:</strong>
                {{ $appointment->status }}
            </div>
            <div class="form-group mb-2">
                <strong>Observaciones:</strong>
                {{ $appointment->observations }}
            </div>
        </div>
    </div>
@endsection

@section('css')
    {{-- <link rel="stylesheet" href="/css/custom.css"> --}}
@endsection

@section('js')
    {{-- <script>console.log('Vista de cita cargada');</script> --}}
@endsection
