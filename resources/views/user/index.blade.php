@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Usuarios</span>
            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm" data-placement="left">
                Crear Nuevo
            </a>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success m-3">
                {{ $message }}
            </div>
        @endif

        <div class="card-body bg-white p-0">
            <div class="table-responsive">
                <table class="table table-striped table-hover mb-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->address }}</td>
                                <td>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                        <a class="btn btn-sm btn-primary" href="{{ route('users.show', $user->id) }}">
                                            <i class="fa fa-fw fa-eye"></i> Ver
                                        </a>
                                        <a class="btn btn-sm btn-success" href="{{ route('users.edit', $user->id) }}">
                                            <i class="fa fa-fw fa-edit"></i> Editar
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); if(confirm('¿Está seguro de eliminar?')) { this.closest('form').submit(); }">
                                            <i class="fa fa-fw fa-trash"></i> Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer clearfix">
            {!! $users->withQueryString()->links() !!}
        </div>
    </div>
@stop
