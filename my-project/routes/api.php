<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/chollos', [ APIController::class, 'index' ])->name('chollos');
Route::get('/chollos/{id?}', [ APIController::class, 'chollo' ])->name('chollo');
Route::get('/random', [ APIController::class, 'cholloRandom' ])->name('chollo.random');
Route::post('/store', [ APIController::class, 'store' ])->name('store');
