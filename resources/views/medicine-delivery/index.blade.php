@extends('adminlte::page')

@section('title', 'Entregas de Medicina')

@section('content_header')
    <h1>Entregas de Medicina</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <span id="card_title">
                    Entregas de Medicina
                </span>

                <div class="float-right">
                    <a href="{{ route('medicine-deliveries.create') }}" class="btn btn-primary btn-sm" data-placement="left">
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
                            <th>Id de Historia Clínica</th>
                            <th>Id de Medicina</th>
                            <th>Cantidad</th>
                            <th>Notas</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($medicineDeliveries as $medicineDelivery)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $medicineDelivery->medical_record_id }}</td>
                                <td>{{ $medicineDelivery->medicine_id }}</td>
                                <td>{{ $medicineDelivery->quantity }}</td>
                                <td>{{ $medicineDelivery->notes }}</td>
                                <td>
                                    <form action="{{ route('medicine-deliveries.destroy', $medicineDelivery->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary" href="{{ route('medicine-deliveries.show', $medicineDelivery->id) }}">
                                            <i class="fa fa-fw fa-eye"></i> Ver
                                        </a>
                                        <a class="btn btn-sm btn-success" href="{{ route('medicine-deliveries.edit', $medicineDelivery->id) }}">
                                            <i class="fa fa-fw fa-edit"></i> Editar
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('¿Seguro que desea eliminar?') ? this.closest('form').submit() : false;">
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

    {!! $medicineDeliveries->withQueryString()->links() !!}
@endsection
