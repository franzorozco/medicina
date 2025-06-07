@extends('adminlte::page')

@section('title', 'Actualizar Medicina')

@section('content_header')
    <h1>Actualizar Medicina</h1>
@endsection

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Actualizar Medicina</span>
        </div>
        <div class="card-body bg-white">
            <form method="POST" action="{{ route('medicines.update', $medicine->id) }}" role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('medicine.form')

            </form>
        </div>
    </div>
@endsection
