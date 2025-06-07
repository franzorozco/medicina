@extends('adminlte::page')

@section('title', 'Detalle de Entrega de Medicina')

@section('content_header')
    <h1>Detalle de Entrega de Medicina</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span class="card-title">Mostrar Entrega de Medicina</span>
            <a class="btn btn-primary btn-sm" href="{{ route('medicine-deliveries.index') }}">Volver</a>
        </div>
        <div class="card-body bg-white">
            <div class="form-group mb-3">
                <strong>Id de Historia Clínica:</strong>
                {{ $medicineDelivery->medical_record_id }}
            </div>
            <div class="form-group mb-3">
                <strong>Id de Medicina:</strong>
                {{ $medicineDelivery->medicine_id }}
            </div>
            <div class="form-group mb-3">
                <strong>Cantidad:</strong>
                {{ $medicineDelivery->quantity }}
            </div>
            <div class="form-group mb-3">
                <strong>Notas:</strong>
                {{ $medicineDelivery->notes }}
            </div>
        </div>
    </div>
@endsection
