<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\MovimientoStockController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::get('/', function () {
    return redirect()->route('login'); // Redirigir al login
});

// Rutas de autenticación
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Ruta del Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// Página de inicio (opcional)
Route::get('/', function () {
    return view('welcome');
});

// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    // Rutas de Usuarios
    Route::resource('usuarios', UsuarioController::class);

    // Rutas de Roles
    Route::resource('roles', RolController::class);

    // Rutas de Facturas
    Route::resource('facturas', FacturaController::class);

    // Rutas de Pagos
    Route::resource('pagos', PagoController::class);

    // Rutas de Productos
    Route::resource('productos', ProductoController::class);
    Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/{id}/edit', [ProductoController::class, 'edit'])->name('productos.edit');

    // Rutas de Stock
    Route::resource('stocks', StockController::class);

    // Ruta para registrar movimientos de stock (entradas/salidas)
    Route::post('stocks/movimiento', [StockController::class, 'registrarMovimiento'])->name('stocks.movimiento');

    // Rutas de Clientes
    Route::resource('clientes', ClienteController::class);

    // Rutas de Inventario
    Route::resource('inventarios', InventarioController::class);

    Route::get('/inventarios', [InventarioController::class, 'index'])->name('inventarios.index');
    Route::get('/inventarios/create', [InventarioController::class, 'create'])->name('inventarios.create');
    Route::post('/inventarios', [InventarioController::class, 'store'])->name('inventarios.store');
    Route::get('/inventarios/{id}/edit', [InventarioController::class, 'edit'])->name('inventarios.edit');
    Route::put('/inventarios/{id}', [InventarioController::class, 'update'])->name('inventarios.update');
    Route::delete('/inventarios/{id}', [InventarioController::class, 'destroy'])->name('inventarios.destroy');
});

