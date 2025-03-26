<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index() {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create() {
        return view('productos.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric'
        ]);

        Producto::create($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto agregado correctamente.');
    }

    public function show(Producto $producto) {
        return view('productos.show', compact('producto'));
    }

    public function edit(Producto $producto) {
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric'
        ]);

        $producto->update($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy(Producto $producto) {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
    }
}
