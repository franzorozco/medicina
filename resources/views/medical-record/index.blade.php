@extends('adminlte::page')

@section('title', 'Historias Clínicas')

@section('content_header')
    <h1>Historias Clínicas</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <span id="card_title">Historias Clínicas</span>
                <div class="float-right">
                    <a href="{{ route('medical-records.create') }}" class="btn btn-primary btn-sm" data-placement="left">
                        Crear Nuevo
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
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Paciente</th>
                            <th>Médico</th>
                            <th>Fecha</th>
                            <th>Motivo</th>
                            <th>Diagnóstico</th>
                            <th>Tratamiento</th>
                            <th>Recomendaciones</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($medicalRecords as $medicalRecord)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $medicalRecord->patient_id }}</td>
                                <td>{{ $medicalRecord->doctor_id }}</td>
                                <td>{{ $medicalRecord->record_date }}</td>
                                <td>{{ $medicalRecord->reason }}</td>
                                <td>{{ $medicalRecord->diagnosis }}</td>
                                <td>{{ $medicalRecord->treatment }}</td>
                                <td>{{ $medicalRecord->recommendations }}</td>
                                <td>
                                    <form action="{{ route('medical-records.destroy', $medicalRecord->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary" href="{{ route('medical-records.show', $medicalRecord->id) }}">
                                            <i class="fa fa-fw fa-eye"></i> Ver
                                        </a>
                                        <a class="btn btn-sm btn-success" href="{{ route('medical-records.edit', $medicalRecord->id) }}">
                                            <i class="fa fa-fw fa-edit"></i> Editar
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" 
                                            onclick="event.preventDefault(); confirm('¿Seguro que desea eliminar?') ? this.closest('form').submit() : false;">
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
    {!! $medicalRecords->withQueryString()->links() !!}
@endsection
