<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\ReservasController::class, 'index'])->name('home');

Route::get('/admin/users/index', [App\Http\Controllers\Admin\UserController::class, 'index']);

Route::get('/admin/reservas/index', [App\Http\Controllers\ReseController::class, 'index']);

Route::get('/admin/cliente/create', [App\Http\Controllers\ReservasController::class, 'create']);

Route::post('/admin/cliente/create', [App\Http\Controllers\ReservasController::class, 'store']);

Route::get('/admin/cliente/edit/{id}', [App\Http\Controllers\ReservasController::class, 'edit']);

Route::put('/admin/cliente/update/{id}', [App\Http\Controllers\ReservasController::class, 'update']);

Route::delete('admin/cliente/delete/{id}', [App\Http\Controllers\ReservasController::class, 'destroy']);

