<?php

use App\Http\Controllers\comprasControllers;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::get('/compras',[comprasControllers::class,'index'])->name('compras.index');
    Route::get('/compras/create',[comprasControllers::class,'create'])->name('compras.create');
    Route::post('/compras',[comprasControllers::class,'store'])->name('compras.store');
    Route::get('/compras/{id}/edit',[comprasControllers::class,'edit'])->name('compras.edit');
    Route::put('/compras/{id}',[comprasControllers::class,'update'])->name('compras.update');
    Route::delete('/compras/{id}',[comprasControllers::class,'destroy'])->name('compras.destroy');
});

require __DIR__.'/auth.php';
