@extends('adminlte::page')

@section('title', 'Crear Usuario')

@section('content_header')
    <h1>Crear Usuario</h1>
@endsection

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Crear Usuario</h3>
        </div>
        <div class="card-body bg-white">
            <form method="POST" action="{{ route('users.store') }}" role="form" enctype="multipart/form-data">
                @csrf

                @include('user.form')

            </form>
        </div>
    </div>
@endsection
