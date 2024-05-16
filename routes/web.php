<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
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
    return view('auth.login');
});

// Route::get('/empleado', function () {
//     return view('empleado.index');
// });
Route::post('/empleado', [EmpleadoController::class, 'store'])->middleware('auth');
Route::get('/empleado/create', [EmpleadoController::class, 'create'])->middleware('auth');
Route::get('/empleado/{empleado}/edit', [EmpleadoController::class, 'edit'])->middleware('auth');
Route::get('/empleado/index', [EmpleadoController::class, 'index'])->middleware('auth');
Route::get('/empleado/form', [EmpleadoController::class, 'form'])->middleware('auth');
Route::delete('/empleado/{empleado}', [EmpleadoController::class, 'destroy'])->middleware('auth');
Route::patch('/empleado/{empleado}', [EmpleadoController::class, 'update'])->middleware('auth');
// Route::resource('empleado', EmpleadoController::class);
Route::resource('empleado', EmpleadoController::class);
Auth::routes(['register' => false, 'reset' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'EmpleadoController@index')->name('home');
});
