@extends('adminlte::page')

@section('title', 'Medicinas')

@section('content_header')
    <h1>Medicinas</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <span id="card_title">
                    Medicinas
                </span>

                <div class="float-right">
                    <a href="{{ route('medicines.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
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
                    <thead class="thead">
                        <tr>
                            <th>No</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Unidad</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($medicines as $medicine)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $medicine->name }}</td>
                                <td>{{ $medicine->description }}</td>
                                <td>{{ $medicine->unit }}</td>
                                <td>
                                    <form action="{{ route('medicines.destroy', $medicine->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary" href="{{ route('medicines.show', $medicine->id) }}">
                                            <i class="fa fa-fw fa-eye"></i> Ver
                                        </a>
                                        <a class="btn btn-sm btn-success" href="{{ route('medicines.edit', $medicine->id) }}">
                                            <i class="fa fa-fw fa-edit"></i> Editar
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('¿Seguro que quieres eliminar?') ? this.closest('form').submit() : false;">
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

    {!! $medicines->withQueryString()->links() !!}
@endsection
