@extends('adminlte::page')

@section('title', 'BlasLoarte')

@section('content_header')
    <h1>Editar Rol</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Mensaje!</strong> {{session('info')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}
            @include('admin.roles.partials.form');
            {!! Form::submit('Editar Rol Rol', ['class' => 'btn btn-primary', 'placeholder' => 'Ingresar Rol']) !!}
            {!! Form::close() !!}
        </div>
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
        <script>
            console.log('Hi!');
        </script>
    @stop
