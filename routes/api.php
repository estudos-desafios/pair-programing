<?php

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

/** Create Route User */
// Route::resource(name:'users', controller:\App\Http\Controllers\UserController::class);

/** Create Route Categorias */
Route::resource(name:'categorias', controller:\App\Http\Controllers\CategoriaController::class);
