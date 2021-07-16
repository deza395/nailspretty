@extends('adminlte::page')

@section('title', 'Servicios')

@section('content_header')
<a href="{{route('admin.services.create')}}" class="btn btn-secondary btn-sm float-right"> Nuevo servicio</a>
    <h1>Lista de Servicios</h1>
@stop

{{-- LISTA DE SERVICIOS, CON BOTONES DE EDITAR  Y ELIMINAR --}}

@section('content')
    @livewire('admin.service-index')
@stop

{{--  FIN LISTA DE SERVICIOS, CON BOTONES DE EDITAR  Y ELIMINAR --}}


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop