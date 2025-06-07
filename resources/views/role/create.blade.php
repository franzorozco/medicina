@extends('adminlte::page')

@section('title', __('Crear Rol'))

@section('content_header')
    <h1>{{ __('Crear Rol') }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <span class="card-title">{{ __('Crear Rol') }}</span>
        </div>
        <div class="card-body bg-white">
            <form method="POST" action="{{ route('roles.store') }}" role="form" enctype="multipart/form-data">
                @csrf

                @include('role.form')

            </form>
        </div>
    </div>
@stop
