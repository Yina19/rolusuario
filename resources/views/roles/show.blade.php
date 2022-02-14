@extends('welcome')
@section('title')
    Visualizar Role Registrado
@endsection
@section('content')
    <table class="table table-condensed table-striped">
        <tr><td>Id</td><td>{{ $roles['id'] }}</td></tr>
        <tr><td>Nombre</td><td>{{ $roles['name'] }}</td></tr>
        <tr><td>Nombre en Pantalla</td><td>{{ $roles['screen_name'] }}</td></tr>
    </table>
    <hr>
    <a class="btn btn-secondary" href="{{ route('roles.index') }}">Volver</a> &nbsp;&nbsp;&nbsp;
    <a class="btn btn-secondary" href="{{ route('roles.show', $roles['id']) }}">Recargar</a>  &nbsp;&nbsp;&nbsp;
@endsection
