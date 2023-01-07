<?php


use App\Http\Controllers\HomeController;
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



Route::get('/usuarios', [HomeController::class, 'index'])->name('index');
Route::get('/usuario/{id}', [HomeController::class, 'show'])->name('user.show');
Route::get('/usuario/edit/{id}', [HomeController::class, 'edit'])->name('user.edit');
Route::put('/usuario/update/{id}', [HomeController::class, 'update'])->name('user.update');
Route::delete('/usuario/delete/{id}', [HomeController::class, 'destroy'])->name('user.destroy');
Route::get('/usuarios/adicionar', [HomeController::class, 'create'])->name('user.create');
Route::post('/usuarios/adicionar', [HomeController::class, 'store'])->name('user.store');

 


