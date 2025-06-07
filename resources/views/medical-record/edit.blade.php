@extends('adminlte::page')

@section('title', 'Actualizar Historia Clínica')

@section('content_header')
    <h1>Actualizar Historia Clínica</h1>
@endsection

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Actualizar Historia Clínica</span>
        </div>
        <div class="card-body bg-white">
            <form method="POST" action="{{ route('medical-records.update', $medicalRecord->id) }}" role="form" enctype="multipart/form-data">
                @method('PATCH')
                @csrf

                @include('medical-record.form')

            </form>
        </div>
    </div>
@endsection

@section('css')
    {{-- <link rel="stylesheet" href="/css/custom.css"> --}}
@endsection

@section('js')
    {{-- <script>console.log('Formulario de actualización de historia clínica cargado');</script> --}}
@endsection
