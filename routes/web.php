<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\articleController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\factureController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\gestionutilisateurController;

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

Route::get('/dashboard', [dashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('article', articleController::class);
Route::get('supprim-art/{id}', [articleController::class, 'destroy']);

Route::resource('client', clientController::class);
Route::get('supprim-cli/{id}', [clientController::class, 'destroy']);
Route::get('/clients/search', [clientController::class, 'search'])->name('client.search');

Route::resource('facture', factureController::class);
Route::get('supprim-fac/{id}', [factureController::class, 'destroy']);

Route::resource('gestionutilisateur', gestionutilisateurController::class);
Route::get('supprim-util/{id}', [gestionutilisateurController::class, 'destroy']);

require __DIR__.'/auth.php';
