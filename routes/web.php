<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\EtudiantController;
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

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/nouveau', [EtudiantController::class, 'create'])->name('new');
Route::post('/nouveau', [EtudiantController::class, 'store'])->name('insert');

Route::get('/etudiant/{etudiant}/modifier', [EtudiantController::class, 'edit'])->name('edit');
Route::post('/etudiant/{etudiant}/modifier', [EtudiantController::class, 'update'])->name('update');
Route::get('/etudiant/{etudiant}', [EtudiantController::class, 'show'])->name('show');
Route::get('/etudiant/{etudiant}/supprimer', [EtudiantController::class, 'destroy'])->name('destroy');

