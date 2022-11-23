<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\empController;
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

Route::get('/raad', [empController::class, 'index']);

Route::get('/raad/create', [empController::class, 'create']);

Route::post('/raad', [empController::class, 'store']);

Route::get('/raad/{id}/edit', [empController::class, 'edit']);

Route::post('/raad/{id}', [empController::class, 'update']);

Route::get('/raad/destroy/{id}', [empController::class, 'destroy']);

Route::get('/raad/download/pdf',[empController::class,'pdf']);