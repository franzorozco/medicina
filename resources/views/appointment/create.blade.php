@extends('adminlte::page')

@section('title', 'Crear Cita')

@section('content_header')
    <h1>Crear Cita</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <span class="card-title">Crear Cita</span>
        </div>
        <div class="card-body bg-white">
            <form method="POST" action="{{ route('appointments.store') }}" role="form" enctype="multipart/form-data">
                @csrf

                @include('appointment.form')

            </form>
        </div>
    </div>
@endsection

{{-- Opcional: Secciones para estilos y scripts personalizados --}}
@section('css')
    {{-- <link rel="stylesheet" href="/css/custom.css"> --}}
@endsection

@section('js')
    {{-- <script>console.log('Página Crear Cita cargada');</script> --}}
@endsection
