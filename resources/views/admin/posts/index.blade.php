@extends('adminlte::page')

@section('title', 'BlasLoarte')

@section('content_header')

    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.posts.create') }}">Nuevo Post</a>

    <h1>Lista de Posts</h1>
@stop
@section('content')
    
    @livewire('admin.posts-index')
    {{-- @if (session('info'))
        <div class="alert alert-info" role="alert">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.posts.create') }}" class="btn btn-secondary btn-sm">Agregar Nuevo Post</a>
        </div>
        <div class="card-body">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>STATUS</th>
                        <th>USUARIO</th>
                        <th>CATEGORIA</th>
                        <th colspan="2">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->status }}</td>
                            <td>{{ $post->user->name }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.posts.edit', $post) }}">Editar</a>
                            </td>
                            <td>
                                <form action="">
                                    <a class="btn btn-danger btn-sm" href="">Eliminar</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                {{ $posts->onEachSide(2)->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div> --}}
@stop
