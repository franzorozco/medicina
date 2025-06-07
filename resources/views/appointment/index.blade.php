@extends('adminlte::page')

@section('title', 'Citas')

@section('content_header')
    <h1>Citas</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <span id="card_title">
                    Citas
                </span>
                <div class="float-right">
                    <a href="{{ route('appointments.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                        Crear Nueva
                    </a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success m-4">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="card-body bg-white">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead">
                        <tr>
                            <th>No</th>
                            <th>ID Paciente</th>
                            <th>ID Doctor</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Estado</th>
                            <th>Observaciones</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointments as $appointment)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $appointment->patient_id }}</td>
                                <td>{{ $appointment->doctor_id }}</td>
                                <td>{{ $appointment->date }}</td>
                                <td>{{ $appointment->time }}</td>
                                <td>{{ $appointment->status }}</td>
                                <td>{{ $appointment->observations }}</td>
                                <td>
                                    <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary" href="{{ route('appointments.show', $appointment->id) }}">
                                            <i class="fa fa-fw fa-eye"></i> Ver
                                        </a>
                                        <a class="btn btn-sm btn-success" href="{{ route('appointments.edit', $appointment->id) }}">
                                            <i class="fa fa-fw fa-edit"></i> Editar
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('¿Estás seguro de eliminar?') ? this.closest('form').submit() : false;">
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
    </div>

    {!! $appointments->withQueryString()->links() !!}
@endsection

@section('css')
    {{-- <link rel="stylesheet" href="/css/custom.css"> --}}
@endsection

@section('js')
    {{-- <script>console.log('Página de citas cargada');</script> --}}
@endsection
