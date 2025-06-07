@extends('adminlte::page')

@section('title', 'Actualizar Usuario')

@section('content_header')
    <h1>Actualizar Usuario</h1>
@endsection

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Actualizar Usuario</h3>
        </div>
        <div class="card-body bg-white">
            <form method="POST" action="{{ route('users.update', $user->id) }}" role="form" enctype="multipart/form-data">
                @method('PATCH')
                @csrf

                @include('user.form')

            </form>
        </div>
    </div>
@endsection
