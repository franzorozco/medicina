@extends('adminlte::page')

@section('title', $user->name ?? 'Mostrar Usuario')

@section('content_header')
    <h1>Mostrar Usuario</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span class="card-title">Mostrar Usuario</span>
            <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm">Volver</a>
        </div>

        <div class="card-body bg-white">
            <div class="mb-3">
                <strong>Nombre:</strong> {{ $user->first_name }}
            </div>
            <div class="mb-3">
                <strong>Apellido:</strong> {{ $user->last_name }}
            </div>
            <div class="mb-3">
                <strong>Email:</strong> {{ $user->email }}
            </div>
            <div class="mb-3">
                <strong>Teléfono:</strong> {{ $user->phone }}
            </div>
            <div class="mb-3">
                <strong>Dirección:</strong> {{ $user->address }}
            </div>
        </div>
    </div>
@stop
