@extends('adminlte::page')

@section('title', 'Crear Entrega de Medicina')

@section('content_header')
    <h1>Crear Entrega de Medicina</h1>
@endsection

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Crear Entrega de Medicina</span>
        </div>
        <div class="card-body bg-white">
            <form method="POST" action="{{ route('medicine-deliveries.store') }}" role="form" enctype="multipart/form-data">
                @csrf

                @include('medicine-delivery.form')

            </form>
        </div>
    </div>
@endsection
