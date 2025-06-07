@extends('adminlte::page')

@section('title', 'Actualizar Entrega de Medicina')

@section('content_header')
    <h1>Actualizar Entrega de Medicina</h1>
@endsection

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Actualizar Entrega de Medicina</span>
        </div>
        <div class="card-body bg-white">
            <form method="POST" action="{{ route('medicine-deliveries.update', $medicineDelivery->id) }}" role="form" enctype="multipart/form-data">
                @method('PATCH')
                @csrf

                @include('medicine-delivery.form')

            </form>
        </div>
    </div>
@endsection
