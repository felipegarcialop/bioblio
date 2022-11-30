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
    return view('auth.login');
});

Auth::routes();

Route::resource('tpersonas', App\Http\Controllers\TpersonaController::class)->middleware('auth');
Route::resource('personas', App\Http\Controllers\PersonaController::class)->middleware('auth');
Route::resource('clasificaciones', App\Http\Controllers\ClasificacioneController::class)->middleware('auth');
Route::resource('editoriales', App\Http\Controllers\EditorialeController::class)->middleware('auth');
Route::resource('libros', App\Http\Controllers\LibroController::class)->middleware('auth');
Route::resource('estantes', App\Http\Controllers\EstanteController::class)->middleware('auth');
Route::resource('escritores', App\Http\Controllers\EscritoreController::class)->middleware('auth');
Route::resource('dlibros', App\Http\Controllers\DlibroController::class)->middleware('auth');
Route::resource('dclasificaciones', App\Http\Controllers\DclasificacioneController::class)->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
