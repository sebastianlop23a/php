<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{
    public function index() {
        $roles = Rol::all();
        return view('roles.index', compact('roles'));
    }

    public function create() {
        return view('roles.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nombre' => 'required|string|max:255'
        ]);

        Rol::create($request->all());
        return redirect()->route('roles.index')->with('success', 'Rol creado correctamente.');
    }

    public function show(Rol $rol) {
        return view('roles.show', compact('rol'));
    }

    public function edit(Rol $rol) {
        return view('roles.edit', compact('rol'));
    }

    public function update(Request $request, Rol $rol) {
        $request->validate([
            'nombre' => 'required|string|max:255'
        ]);

        $rol->update($request->all());
        return redirect()->route('roles.index')->with('success', 'Rol actualizado correctamente.');
    }

    public function destroy(Rol $rol) {
        $rol->delete();
        return redirect()->route('roles.index')->with('success', 'Rol eliminado correctamente.');
    }
}

