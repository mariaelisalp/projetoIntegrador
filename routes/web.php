<?php

use App\Http\Controllers\PessoasDController;
use Illuminate\Support\Facades\Route;

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

Route::get('/pessoasDesaparecidas', [PessoasDController::class,'index']);

Route::prefix('pessoasDesaparecidas')->group(function(){
    Route::get('/', [PessoasDController::class, 'index'])->name('pessoasDesaparecidas-index');
    Route::get('/create', [PessoasDController::class, 'create'])->name('pessoasDesaparecidas-create');
    Route::post('/store', [PessoasDController::class, 'store'])->name('pessoasDesaparecidas-store');
    

});

Route::resources('pessoasDesaparecidas', PessoasDController::class);


Route::get('/', function () {

    return view('welcome');
})->name('home-index');

