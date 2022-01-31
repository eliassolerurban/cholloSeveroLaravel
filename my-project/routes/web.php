<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get("/", [PagesController::class, 'inicio'])->name('inicio');
Route::get("nuevos", [PagesController::class, 'nuevos'])->name('nuevos');
Route::get("destacados", [PagesController::class, 'destacados'])->name('destacados');
Route::get("crear", [PagesController::class, 'formCrear'])->name('formCrear');
Route::post('crear', [ PagesController::class, 'crear' ]) -> name('crear');
Route::get('editar/{id}', [ PagesController::class, 'formEditar' ]) -> name('formEditar');
Route::put('editar/{id}', [ PagesController::class, 'editar' ]) -> name('editar');
Route::get('eliminar/{id}', [ PagesController::class, 'confirmEliminar' ]) -> name('confirmEliminar');
Route::delete('eliminar/{id}', [ PagesController::class, 'eliminar' ]) -> name('eliminar');
Route::get('detalle/{id}', [ PagesController::class, 'detalle' ]) -> name('detalle');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
