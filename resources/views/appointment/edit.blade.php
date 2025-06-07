@extends('adminlte::page')

@section('title', 'Actualizar Cita')

@section('content_header')
    <h1>Actualizar Cita</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <span class="card-title">Actualizar Cita</span>
        </div>
        <div class="card-body bg-white">
            <form method="POST" action="{{ route('appointments.update', $appointment->id) }}" role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('appointment.form')

            </form>
        </div>
    </div>
@endsection

@section('css')
    {{-- <link rel="stylesheet" href="/css/custom.css"> --}}
@endsection

@section('js')
    {{-- <script>console.log('Página Actualizar Cita cargada');</script> --}}
@endsection
