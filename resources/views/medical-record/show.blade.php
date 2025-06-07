@extends('adminlte::page')

@section('title', 'Detalle de Historia Clínica')

@section('content_header')
    <h1>Detalle de Historia Clínica</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Mostrar Historia Clínica</span>
            <a href="{{ route('medical-records.index') }}" class="btn btn-primary btn-sm">Volver</a>
        </div>
        <div class="card-body bg-white">
            <div class="form-group mb-3">
                <strong>Paciente:</strong>
                {{ $medicalRecord->patient_id }}
            </div>
            <div class="form-group mb-3">
                <strong>Médico:</strong>
                {{ $medicalRecord->doctor_id }}
            </div>
            <div class="form-group mb-3">
                <strong>Fecha de Registro:</strong>
                {{ $medicalRecord->record_date }}
            </div>
            <div class="form-group mb-3">
                <strong>Motivo:</strong>
                {{ $medicalRecord->reason }}
            </div>
            <div class="form-group mb-3">
                <strong>Diagnóstico:</strong>
                {{ $medicalRecord->diagnosis }}
            </div>
            <div class="form-group mb-3">
                <strong>Tratamiento:</strong>
                {{ $medicalRecord->treatment }}
            </div>
            <div class="form-group mb-3">
                <strong>Recomendaciones:</strong>
                {{ $medicalRecord->recommendations }}
            </div>
        </div>
    </div>
@endsection
