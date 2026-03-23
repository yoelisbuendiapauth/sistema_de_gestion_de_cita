<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SecretariaController;
use App\Http\Controllers\UsuariosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Página pública
Route::get('/', function () {
    return view('index');
})->name('index');


// Autenticación
Auth::routes();


// Redirección después de login
Route::get('/home', function () {
    return redirect('/admin');
})->name('home');


// RUTAS DEL PANEL ADMIN (PROTEGIDAS)
Route::middleware(['auth'])->group(function () {

    // Dashboard admin
    Route::get('/admin', [AdminController::class, 'index'])
        ->name('admin.index');

    // Usuarios
   // INDEX
Route::get('/admin/usuarios', [UsuariosController::class, 'index'])
    ->name('admin.usuarios.index');

// CREATE
Route::get('/admin/usuarios/create', [UsuariosController::class,'create'])
    ->name('admin.usuarios.create');

// STORE
Route::post('/admin/usuarios', [UsuariosController::class,'store'])
    ->name('admin.usuarios.store');

// EDIT
Route::get('/admin/usuarios/{id}/edit', [UsuariosController::class, 'edit'])
    ->name('admin.usuarios.edit');

// UPDATE
Route::put('/admin/usuarios/{id}', [UsuariosController::class, 'update'])
    ->name('admin.usuarios.update');

// CONFIRM DELETE
Route::get('/admin/usuarios/{id}/confirm-delete', [UsuariosController::class, 'confirmDelete'])
    ->name('admin.usuarios.confirmDelete');

//  DELETE 
Route::delete('/admin/usuarios/{id}', [UsuariosController::class, 'destroy'])
    ->name('admin.usuarios.destroy');

//  SHOW 
Route::get('/admin/usuarios/{id}', [UsuariosController::class, 'show'])
    ->name('admin.usuarios.show');
    ///RUTA PARA EL ADMIN SECRETARIA 
    Route::get('/admin/secretarias', [SecretariaController::class, 'index'])
    ->name('admin.secretarias.index');
 Route::get('/admin/secretarias/create', [SecretariaController::class, 'create'])
    ->name('admin.secretarias.create');

});