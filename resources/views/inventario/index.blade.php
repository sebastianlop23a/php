@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Inventario</h2>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('inventarios.create') }}" class="btn btn-success mb-3">Agregar Producto</a>

    <table class="table">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad Disponible</th>
                <th>Stock Mínimo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inventarios as $inventario)
            <tr>
                <td>{{ $inventario->producto->nombre }}</td>
                <td>{{ $inventario->cantidad_disponible }}</td>
                <td>{{ $inventario->stock_minimo }}</td>
                <td>
                    <a href="{{ route('inventarios.edit', $inventario->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('inventarios.destroy', $inventario->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este producto del inventario?');">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
