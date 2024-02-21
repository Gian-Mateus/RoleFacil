<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PainelAdmController;
use App\Models\PainelAdm;
use Illuminate\Auth\Events\Login;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class, 'index']);
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::get('/events/edit/{id}', [EventController::class, 'edit']);
Route::post('/events', [EventController::class, 'store']);
Route::put('/events/update/{id}', [EventController::class, 'update']);
Route::delete('/events/{id}', [EventController::class, 'destroy']);

/* Rotas para estilização e criação das views */

Route::get('/estabelecimento', function () {
    return view("establishment");
});

Route::get('/estabelecimentos', function () {
    return view("list-establishment");
});

/* Rota para painel admnistrativo */

Route::resource('admin/paineladm', PainelAdmController::class);

/* Rota para login e registro */

Route::get('/login/register', [RegisterController::class, 'create']);
Route::post('/login/register', [RegisterController::class, 'store'])->name('login.register');
Route::get('/login/logar', [LoginController::class, 'index']);
Route::post('/login/logar', [LoginController::class, 'store'])->name('login.logar');
