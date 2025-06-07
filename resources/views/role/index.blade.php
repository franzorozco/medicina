@extends('adminlte::page')

@section('title', __('Roles'))

@section('content_header')
    <h1>{{ __('Roles') }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>{{ __('Roles') }}</span>
            <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm">
                {{ __('Create New') }}
            </a>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success m-3">
                {{ $message }}
            </div>
        @endif

        <div class="card-body bg-white table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Guard Name') }}</th>
                        <th>{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{ $loop->iteration + ($roles->currentPage() - 1) * $roles->perPage() }}</td>
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->guard_name }}</td>
                            <td>
                                <form action="{{ route('roles.destroy', $role->id) }}" method="POST" onsubmit="return confirm('{{ __('Are you sure to delete?') }}');">
                                    <a class="btn btn-sm btn-primary" href="{{ route('roles.show', $role->id) }}">
                                        <i class="fa fa-fw fa-eye"></i> {{ __('Show') }}
                                    </a>
                                    <a class="btn btn-sm btn-success" href="{{ route('roles.edit', $role->id) }}">
                                        <i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {!! $roles->withQueryString()->links() !!}
        </div>
    </div>
@stop
