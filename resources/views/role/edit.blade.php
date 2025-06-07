@extends('adminlte::page')

@section('title', __('Actualizar Rol'))

@section('content_header')
    <h1>{{ __('Actualizar Rol') }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <span class="card-title">{{ __('Actualizar Rol') }}</span>
        </div>
        <div class="card-body bg-white">
            <form method="POST" action="{{ route('roles.update', $role->id) }}" role="form" enctype="multipart/form-data">
                @method('PATCH')
                @csrf

                @include('role.form')

            </form>
        </div>
    </div>
@stop
