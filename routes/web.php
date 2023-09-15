<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

Route::get('/', [CrudController::class, 'index'])->name('crud.index');

Route::get('/add', [CrudController::class, 'add'])->name('crud.add');
Route::post('/', [CrudController::class, 'store'])->name('crud.store');
Route::get('/{users}/edit', [CrudController::class, 'edit'])->name('crud.edit');
Route::post('/{users}/update', [CrudController::class, 'update'])->name('crud.update');
Route::delete('/{users}/destroy', [CrudController::class, 'destroy'])->name('crud.destroy');
