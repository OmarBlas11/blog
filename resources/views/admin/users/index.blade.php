@extends('adminlte::page')

@section('title', 'BlasLoarte')

@section('content_header')
    <h1>Lista de Usuarios Updating Laravel 9</h1>
@stop

@section('content')
    @livewire('admin.users-index')
@stop

@section('css')
    <style>
        .hoverselected {
            background-color: antiquewhite;
        }

    </style>
@stop

@section('js')
    <script src="https://cdn.tailwindcss.com"></script>
@stop
