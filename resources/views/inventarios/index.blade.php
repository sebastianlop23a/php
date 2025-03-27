@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Gestión de Inventario y Stock</h2>

        {{-- Botones para alternar entre Inventario y Stock --}}
        <div class="mb-3">
            <a href="{{ route('inventarios.index', ['tipo' => 'inventario']) }}" class="btn btn-{{ request('tipo') == 'inventario' ? 'primary' : 'secondary' }}">Inventario</a>
            <a href="{{ route('inventarios.index', ['tipo' => 'stock']) }}" class="btn btn-{{ request('tipo') == 'stock' ? 'primary' : 'secondary' }}">Stock</a>
        </div>

        {{-- Mostrar mensaje si no hay productos --}}
        @if($inventarios->isEmpty())
            <div class="alert alert-warning">No hay productos en esta categoría.</div>
        @endif

        <a href="{{ route('inventarios.create') }}" class="btn btn-success">Agregar Producto</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($inventarios as $item)
                    <tr>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->cantidad }}</td>
                        <td>${{ number_format($item->precio, 2) }}</td>
                        <td>{{ ucfirst($item->tipo) }}</td>
                        <td>
                            <a href="{{ route('inventarios.edit', $item->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('inventarios.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este producto?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No hay productos en esta categoría.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
