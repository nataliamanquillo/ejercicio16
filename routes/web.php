<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PresidenteController;
use App\Models\Presidente;
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

//rutas equipo

Route::get('equipo/listar',[EquipoController::class, 'index'])->name('equipo.index');
Route::get('equipo/create',[EquipoController::class,'create'])->name('equipo.create');
Route::post('equipo/store',[EquipoController::class,'store'])->name('equipo.store');
Route::get('equipo/{equipo}',[EquipoController::class,'show'])->name('equipo.show');
Route::get('equipo/{equipo}/editar',[EquipoController::class,'edit'])->name('equipo.edit');
Route::put('equipo/{equipo}',[EquipoController::class,'update'])->name('equipo.update');

Route::delete('equipo/{equipo}',[EquipoController::class,'destroy'])->name('equipo.destroy');


//rutas presidente

Route::get('presidente/listar',[PresidenteController::class, 'index'])->name('presidente.index');
Route::get('presidente/create',[PresidenteController::class,'create'])->name('presidente.create');
Route::post('presidente/store',[PresidenteController::class,'store'])->name('presidente.store');
Route::get('presidente/{presidente}',[PresidenteController::class,'show'])->name('presidente.show');
Route::get('presidente/{presidente}/editar',[PresidenteController::class,'edit'])->name('presidente.edit');
Route::put('presidente/{presidente}',[PresidenteController::class,'update'])->name('presidente.update');

Route::delete('presidente/{presidente}',[PresidenteController::class,'destroy'])->name('presidente.destroy');