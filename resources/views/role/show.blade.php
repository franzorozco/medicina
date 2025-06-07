@extends('adminlte::page')

@section('title', $role->name ?? __('Show') . ' ' . __('Role'))

@section('content_header')
    <h1>{{ __('Show') }} {{ __('Role') }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>{{ __('Role Details') }}</span>
            <a href="{{ route('roles.index') }}" class="btn btn-primary btn-sm">
                {{ __('Back') }}
            </a>
        </div>
        <div class="card-body bg-white">
            <div class="form-group">
                <strong>{{ __('Name') }}:</strong>
                <p>{{ $role->name }}</p>
            </div>
            <div class="form-group">
                <strong>{{ __('Guard Name') }}:</strong>
                <p>{{ $role->guard_name }}</p>
            </div>
        </div>
    </div>
@stop
