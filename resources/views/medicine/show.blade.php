@extends('adminlte::page')

@section('title', $medicine->name ?? 'Mostrar Medicina')

@section('content_header')
    <h1>Mostrar Medicina</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="float-left">
                <span class="card-title">Mostrar Medicina</span>
            </div>
            <div class="float-right">
                <a class="btn btn-primary btn-sm" href="{{ route('medicines.index') }}">Volver</a>
            </div>
        </div>

        <div class="card-body bg-white">
            <div class="form-group mb-2">
                <strong>Nombre:</strong>
                {{ $medicine->name }}
            </div>
            <div class="form-group mb-2">
                <strong>Descripción:</strong>
                {{ $medicine->description }}
            </div>
            <div class="form-group mb-2">
                <strong>Unidad:</strong>
                {{ $medicine->unit }}
            </div>
        </div>
    </div>
@endsection
