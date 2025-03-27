<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
use App\Models\Producto;

class InventarioController extends Controller
{
    // 📌 Mostrar lista del inventario
    public function index()
    {
        $inventarios = Inventario::with('producto')->get();
        return view('inventario.index', compact('inventarios'));
    }

    // 📌 Mostrar formulario para agregar un producto al inventario
    public function create()
    {
        $productos = Producto::all();
        return view('inventario.create', compact('productos'));
    }

    // 📌 Guardar un nuevo producto en el inventario
    public function store(Request $request)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'cantidad_disponible' => 'required|integer|min:0',
            'stock_minimo' => 'required|integer|min:0',
        ]);

        Inventario::create([
            'producto_id' => $request->producto_id,
            'cantidad_disponible' => $request->cantidad_disponible,
            'stock_minimo' => $request->stock_minimo,
        ]);

        return redirect()->route('inventarios.index')->with('success', 'Producto agregado al inventario correctamente.');
    }

    // 📌 Editar un producto del inventario
    public function edit($id)
    {
        $inventario = Inventario::findOrFail($id);
        $productos = Producto::all();
        return view('inventario.edit', compact('inventario', 'productos'));
    }

    // 📌 Actualizar los datos de un producto en el inventario
    public function update(Request $request, $id)
    {
        $inventario = Inventario::findOrFail($id);
        $request->validate([
            'cantidad_disponible' => 'required|integer|min:0',
            'stock_minimo' => 'required|integer|min:0',
        ]);

        $inventario->update($request->all());

        return redirect()->route('inventarios.index')->with('success', 'Inventario actualizado correctamente.');
    }

    // 📌 Eliminar un producto del inventario
    public function destroy($id)
    {
        $inventario = Inventario::findOrFail($id);
        $inventario->delete();

        return redirect()->route('inventarios.index')->with('success', 'Producto eliminado del inventario.');
    }
}


