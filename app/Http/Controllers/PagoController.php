<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pago;

class PagoController extends Controller
{
    public function index() {
        $pagos = Pago::all();
        return view('pagos.index', compact('pagos'));
    }

    public function create() {
        return view('pagos.create');
    }

    public function store(Request $request) {
        $request->validate([
            'factura_id' => 'required|exists:facturas,id',
            'monto' => 'required|numeric'
        ]);

        Pago::create($request->all());
        return redirect()->route('pagos.index')->with('success', 'Pago registrado correctamente.');
    }

    public function show(Pago $pago) {
        return view('pagos.show', compact('pago'));
    }

    public function edit(Pago $pago) {
        return view('pagos.edit', compact('pago'));
    }

    public function update(Request $request, Pago $pago) {
        $request->validate([
            'factura_id' => 'required|exists:facturas,id',
            'monto' => 'required|numeric'
        ]);

        $pago->update($request->all());
        return redirect()->route('pagos.index')->with('success', 'Pago actualizado correctamente.');
    }

    public function destroy(Pago $pago) {
        $pago->delete();
        return redirect()->route('pagos.index')->with('success', 'Pago eliminado correctamente.');
    }
}
