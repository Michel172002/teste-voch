<?php

use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\UnidadeController;
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
    return view('home');
})->name('home.page');

Route::get('/unidades/create', [UnidadeController::class,'create'])->name('unidades.create');
Route::post('/unidades', [UnidadeController::class,'store'])->name('unidades.store');

Route::get('/colaboradores/create', [ColaboradorController::class,'create'])->name('colaboradores.create');
Route::post('/colaboradores', [ColaboradorController::class,'store'])->name('colaboradores.store');
