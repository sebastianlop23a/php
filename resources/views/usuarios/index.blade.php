@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Usuarios Registrados</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->rol_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
