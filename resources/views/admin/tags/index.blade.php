@extends('adminlte::page')

@section('title', 'BlasLoarte')

@section('content_header')
@can('admin.tags.create')
<a class="btn btn-secondary float-right" href="{{ route('admin.tags.create') }}">Nueva Etiqueta</a>
    
@endcan
    <h1>Mostrando la lista de los Tags</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-info" role="alert">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        @can('admin.tags.edit')
                        <th colspan="2">ACCIONES</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name }}</td>
                            @can('admin.tags.edit')
                            <td width="10px">
                                <a href="{{ route('admin.tags.edit', $tag) }}" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            @endcan
                            @can('admin.tags.destroy')
                            <td width="10px">
                                <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                            @endcan
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
