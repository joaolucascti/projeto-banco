

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


// Tela de login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'salvarUsuario'])->name('salvar.usuario');
