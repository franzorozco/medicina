@extends('adminlte::page')

@section('title', 'Mostrar Paciente')

@section('content_header')
    <h1>Mostrar Paciente</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Mostrar Paciente</span>
            <a href="{{ route('patients.index') }}" class="btn btn-primary btn-sm">Volver</a>
        </div>

        <div class="card-body bg-white">
            <div class="mb-3"><strong>Nombre:</strong> {{ $patient->first_name }}</div>
            <div class="mb-3"><strong>Apellido:</strong> {{ $patient->last_name }}</div>
            <div class="mb-3"><strong>Número de Identidad:</strong> {{ $patient->identity_number }}</div>
            <div class="mb-3"><strong>Fecha de Nacimiento:</strong> {{ $patient->birth_date }}</div>
            <div class="mb-3"><strong>Género:</strong> {{ $patient->gender }}</div>
            <div class="mb-3"><strong>Dirección:</strong> {{ $patient->address }}</div>
            <div class="mb-3"><strong>Teléfono:</strong> {{ $patient->phone }}</div>
            <div class="mb-3"><strong>Comunidad:</strong> {{ $patient->community }}</div>
        </div>
    </div>
@endsection
