<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;

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


Route::group(['middleware'=>['auth']],function(){
    Route::resource('tpersonas', App\Http\Controllers\TpersonaController::class);
    Route::resource('personas', App\Http\Controllers\PersonaController::class);
    Route::resource('clasificaciones', App\Http\Controllers\ClasificacioneController::class);
    Route::resource('editoriales', App\Http\Controllers\EditorialeController::class);
    Route::resource('libros', App\Http\Controllers\LibroController::class);
    Route::resource('estantes', App\Http\Controllers\EstanteController::class);
    Route::resource('escritores', App\Http\Controllers\EscritoreController::class);
    Route::resource('dlibros', App\Http\Controllers\DlibroController::class);
    Route::resource('dclasificaciones', App\Http\Controllers\DclasificacioneController::class);
    Route::resource('ejemplares', App\Http\Controllers\EjemplareController::class);
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);

});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
