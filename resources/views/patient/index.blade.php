@extends('adminlte::page')

@section('title', 'Pacientes')

@section('content_header')
    <h1>Pacientes</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Pacientes</span>
            <a href="{{ route('patients.create') }}" class="btn btn-primary btn-sm" data-placement="left">Crear Nuevo</a>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success m-3">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="card-body bg-white">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Número de Identidad</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Género</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Comunidad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($patients as $index => $patient)
                            <tr>
                                <td>{{ $index + $patients->firstItem() }}</td>
                                <td>{{ $patient->first_name }}</td>
                                <td>{{ $patient->last_name }}</td>
                                <td>{{ $patient->identity_number }}</td>
                                <td>{{ $patient->birth_date }}</td>
                                <td>{{ $patient->gender }}</td>
                                <td>{{ $patient->address }}</td>
                                <td>{{ $patient->phone }}</td>
                                <td>{{ $patient->community }}</td>
                                <td>
                                    <form action="{{ route('patients.destroy', $patient->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary" href="{{ route('patients.show', $patient->id) }}">
                                            <i class="fa fa-fw fa-eye"></i> Ver
                                        </a>
                                        <a class="btn btn-sm btn-success" href="{{ route('patients.edit', $patient->id) }}">
                                            <i class="fa fa-fw fa-edit"></i> Editar
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); if(confirm('¿Está seguro de eliminar?')) this.closest('form').submit();">
                                            <i class="fa fa-fw fa-trash"></i> Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {!! $patients->withQueryString()->links() !!}
        </div>
    </div>
@endsection
