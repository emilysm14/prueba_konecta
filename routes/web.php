<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', [App\Http\Controllers\InicioController::class, 'index'])->name('inicio');
Route::get('/productos', [App\Http\Controllers\ProductosController::class, 'view'])->name('productos.view');
Route::get('/productos/index', [App\Http\Controllers\ProductosController::class, 'index'])->name('productos.index');
Route::post('/productos/create', [App\Http\Controllers\ProductosController::class, 'create'])->name('productos.create');
Route::get('/productos/editar/{id}', [App\Http\Controllers\ProductosController::class, 'edit'])->name('productos.edit');
Route::post('/productos/editar/{id}', [App\Http\Controllers\ProductosController::class, 'update'])->name('productos.update');
Route::get('/productos/eliminar/{id}', [App\Http\Controllers\ProductosController::class, 'destroy'])->name('productos.destroy');
//Categorias
Route::get('/categorias', [App\Http\Controllers\CategoriasController::class, 'view'])->name('categorias.view');
Route::get('/categorias/index', [App\Http\Controllers\CategoriasController::class, 'index'])->name('categorias.index');
Route::post('/categorias/create', [App\Http\Controllers\CategoriasController::class, 'create'])->name('categorias.create');
Route::get('/categorias/editar/{id}', [App\Http\Controllers\CategoriasController::class, 'edit'])->name('categorias.edit');
Route::post('/categorias/editar/{id}', [App\Http\Controllers\CategoriasController::class, 'update'])->name('categorias.update');
Route::get('/categorias/eliminar/{id}', [App\Http\Controllers\CategoriasController::class, 'destroy'])->name('categorias.destroy');
//ventas
Route::get('/ventas', [App\Http\Controllers\VentasController::class, 'view'])->name('ventas.view');
Route::get('/ventas/{id}', [App\Http\Controllers\VentasController::class, 'index'])->name('ventas.index');
Route::post('/ventas/create', [App\Http\Controllers\VentasController::class, 'crearVenta'])->name('ventas.create');




