@extends('adminlte::page')

@section('title', 'Crear Paciente')

@section('content_header')
    <h1>Crear Paciente</h1>
@endsection

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Crear Paciente</h3>
        </div>
        <div class="card-body bg-white">
            <form method="POST" action="{{ route('patients.store') }}" role="form" enctype="multipart/form-data">
                @csrf

                @include('patient.form')

            </form>
        </div>
    </div>
@endsection
