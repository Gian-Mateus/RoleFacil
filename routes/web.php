<?php

use App\Http\Controllers\CadastroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PainelAdmController;
use App\Models\PainelAdm;

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

Route::get('/login/cadastro', [CadastroController::class, 'index']);

Route::get('/login/cadastro', [CadastroController::class, 'create']);

Route::post('/login/cadastro', [CadastroController::class, 'store'])->name('login.cadastro');

//Route::resource('/login/cadastro', CadastroController::class);

Route::get('/login', function () {
    return view("login.login");
});
