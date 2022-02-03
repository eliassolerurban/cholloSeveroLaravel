<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get("/", [PagesController::class, 'inicio'])->name('inicio');
Route::get("nuevos", [PagesController::class, 'nuevos'])->name('nuevos');
Route::get("destacados", [PagesController::class, 'destacados'])->name('destacados');
Route::get("crear", [HomeController::class, 'formCrear'])->name('formCrear');
Route::post('crear', [ HomeController::class, 'crear' ]) -> name('crear');
Route::get('editar/{id}', [ HomeController::class, 'formEditar' ]) -> name('formEditar');
Route::put('editar/{id}', [ HomeController::class, 'editar' ]) -> name('editar');
Route::get('eliminar/{id}', [ HomeController::class, 'confirmEliminar' ]) -> name('confirmEliminar');
Route::delete('eliminar/{id}', [ HomeController::class, 'eliminar' ]) -> name('eliminar');
Route::get('detalle/{id}', [ PagesController::class, 'detalle' ]) -> name('detalle');

Auth::routes();

Route::get('/home', [ PagesController::class, 'inicio' ]) -> name('inicio');
