<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\admin\LoginController;
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

/* Rota para home */
Route::middleware("validaLogin")->group(function(){

    Route::get('/', [HomeController::class, 'index']);

    /* Rota para eventos */

    Route::get('/events/create', [EventController::class, 'create']);
    Route::get('/events/edit/{id}', [EventController::class, 'edit']);
    Route::post('/events', [EventController::class, 'store']);
    Route::put('/events/update/{id}', [EventController::class, 'update']);
    Route::delete('/events/{id}', [EventController::class, 'destroy']);
    
});

Route::get('/events', [EventController::class, 'index']);
/* Rota para login e registro */

Route::get('/login/register', [RegisterController::class, 'create']);
Route::post('/login/register', [RegisterController::class, 'store'])->name('login.register');
Route::view("/admin/login", "admin.login.form")->name("login.form");
Route::post("/admin/auth", [LoginController::class, "auth"])->name("login.auth");
Route::get("/admin/logout", [LoginController::class, "logout"]);

/* Rotas para estilização e criação das views */

Route::get('/estabelecimento', function () {
    return view("establishment");
});

Route::get('/estabelecimentos', function () {
    return view("list-establishment");
});

/* Rota para painel admnistrativo */

Route::resource('admin/paineladm', PainelAdmController::class);