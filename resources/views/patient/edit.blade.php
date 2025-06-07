@extends('adminlte::page')

@section('title', 'Actualizar Paciente')

@section('content_header')
    <h1>Actualizar Paciente</h1>
@endsection

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Actualizar Paciente</h3>
        </div>
        <div class="card-body bg-white">
            <form method="POST" action="{{ route('patients.update', $patient->id) }}" role="form" enctype="multipart/form-data">
                @method('PATCH')
                @csrf

                @include('patient.form')

            </form>
        </div>
    </div>
@endsection
