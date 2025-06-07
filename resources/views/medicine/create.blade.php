@extends('adminlte::page')

@section('title', 'Crear Medicina')

@section('content_header')
    <h1>Crear Medicina</h1>
@endsection

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Crear Medicina</span>
        </div>
        <div class="card-body bg-white">
            <form method="POST" action="{{ route('medicines.store') }}" role="form" enctype="multipart/form-data">
                @csrf

                @include('medicine.form')

            </form>
        </div>
    </div>
@endsection
