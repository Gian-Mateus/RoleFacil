<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\EstablishmentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\SearchController;
use Illuminate\Auth\Events\Login;

/* Rotas para login e registro */

Route::get('/register', [RegisterController::class, 'create'])->name('registrar');
Route::post('/login/register', [RegisterController::class, 'store'])->name('login.register');
Route::view("/login", "admin.login.form")->name("login.form");
Route::post("/admin/auth", [LoginController::class, "auth"])->name("login.auth");
Route::get("/logout", [LoginController::class, "logout"]);

/* Rotas para home */

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [ContactController::class, 'store'])->name('contact');

/* Rotas para freelancer */

Route::get('/freelancer', [FreelancerController::class, 'index']);

/* Middleware para proteção de rotas (Só poderá acessar se estiver logado) */
Route::middleware("validaLogin")->group(function(){
    
    /* Rotas para eventos */
    
    Route::get('/events/create', [EventController::class, 'create']);
    Route::get('/events/edit/{id}', [EventController::class, 'edit']);
    Route::post('/events', [EventController::class, 'store']);
    Route::put('/events/update/{id}', [EventController::class, 'update']);
    Route::delete('/events/{id}', [EventController::class, 'destroy']);
    
});

Route::get('/events', [EventController::class, 'index']);

Route::get('/pesquisa', [SearchController::class, 'index']);
Route::post('/pesquisa', [SearchController::class, 'store']);

/* Rotas de Acessos comuns */

Route::get('/role/{establishment:cli_establishment_seed_id}', [EstablishmentController::class, 'show'])->name("role");

Route::get('/list/{list}', [ListController::class, 'show'])->name("list");
Route::get('/roles', [ListController::class, 'all'])->name("roles");

/* Fim dos Acessos comuns */
Route::get('/evento', function () {
    return view("event");
});

/* Rota para login e registro */

Route::get('/client', function () {
    return view("client");
});
