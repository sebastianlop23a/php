@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container text-center">
    <h1 class="section-title">Dashboard</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card bg-dark text-white p-4 mb-3">
                <h3>Total de Productos</h3>
                <p class="fs-1 text-warning">{{ $totalProductos ?? 'N/A' }}</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-dark text-white p-4 mb-3">
                <h3>Total de Clientes</h3>
                <p class="fs-1 text-warning">{{ $totalClientes ?? 'N/A' }}</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-dark text-white p-4 mb-3">
                <h3>Total de Usuarios</h3>
                <p class="fs-1 text-warning">{{ $totalUsuarios ?? 'N/A' }}</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card bg-dark text-white p-4 mb-3">
                <h3>Última Actualización</h3>
                <p class="fs-1 text-info">{{ $ultimaActualizacion ?? 'N/A' }}</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card bg-dark text-white p-4 mb-3">
                <h3>Estado del Sistema</h3>
                <p class="fs-1 text-success">Operativo</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card bg-dark text-white p-4 mb-3">
                <h3>Mensaje del Día</h3>
                <p class="fs-4 text-primary">"El éxito es la suma de pequeños esfuerzos repetidos cada día."</p>
            </div>
        </div>
    </div>
</div>
@endsection
