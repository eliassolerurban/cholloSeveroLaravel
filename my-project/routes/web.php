<?php

use App\Http\Controllers\PagesController;
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

Route::get("/", [PagesController::class, 'inicio'])->name('inicio');
Route::get("nuevos", [PagesController::class, 'nuevos'])->name('nuevos');
Route::get("destacados", [PagesController::class, 'destacados'])->name('destacados');
Route::get("crear", [PagesController::class, 'formCrear'])->name('formCrear');
Route::post('crear', [ PagesController::class, 'crear' ]) -> name('crear');
