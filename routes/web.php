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

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Página de inicio (opcional)
Route::get('/', function () {
    return view('welcome');
});

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

// Rutas de Stock
Route::resource('stocks', StockController::class);

// Ruta para registrar movimientos de stock (entradas/salidas)
Route::post('stocks/movimiento', [StockController::class, 'registrarMovimiento'])->name('stocks.movimiento');

// Rutas de Movimientos de clientes
Route::resource('clientes', ClienteController::class);
// Rutas de Inventario
Route::resource('inventarios', InventarioController::class);