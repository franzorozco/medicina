@extends('adminlte::page')

@section('title', 'Crear Historia Clínica')

@section('content_header')
    <h1>Crear Historia Clínica</h1>
@endsection

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Crear Historia Clínica</span>
        </div>
        <div class="card-body bg-white">
            <form method="POST" action="{{ route('medical-records.store') }}" role="form" enctype="multipart/form-data">
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
    {{-- <script>console.log('Formulario de creación de historia clínica cargado');</script> --}}
@endsection
