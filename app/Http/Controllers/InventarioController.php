<?php
namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index(Request $request)
    {
        $tipo = $request->input('tipo', 'inventario'); // Si no hay filtro, mostrar inventario
        $inventarios = Inventario::where('tipo', $tipo)->get();

        return view('inventarios.index', compact('inventarios', 'tipo'));
    }

    public function create()
    {
        return view('inventarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:0',
            'precio' => 'required|numeric|min:0',
            'descripcion' => 'nullable|string',
            'tipo' => 'required|in:inventario,stock', // Validación para diferenciar stock/inventario
        ]);

        Inventario::create($request->all());

        return redirect()->route('inventarios.index')->with('success', 'Producto agregado al inventario.');
    }

    public function edit(Inventario $inventario)
    {
        return view('inventarios.edit', compact('inventario'));
    }

    public function update(Request $request, Inventario $inventario)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:0',
            'precio' => 'required|numeric|min:0',
            'descripcion' => 'nullable|string',
            'tipo' => 'required|in:inventario,stock',
        ]);

        $inventario->update($request->all());

        return redirect()->route('inventarios.index')->with('success', 'Producto actualizado.');
    }

    public function destroy(Inventario $inventario)
    {
        $inventario->delete();
        return redirect()->route('inventarios.index')->with('success', 'Producto eliminado.');
    }
}
