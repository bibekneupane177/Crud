<?php

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
    return view('welcome');
});

    Route::get('/bibek', [\App\Http\Controllers\BibekController::class, 'index'])->name('bibek.index');
     Route::get('/bibek/add', [\App\Http\Controllers\BibekController::class, 'add'])->name('bibek.add');
     Route::post('/bibek/store', [\App\Http\Controllers\BibekController::class, 'store'])->name('bibek.store');
     Route::get('/bibek/edit/{id}', [\App\Http\Controllers\BibekController::class, 'edit'])->name('bibek.edit');
     Route::post('/bibek/update/{id}', [\App\Http\Controllers\BibekController::class, 'update'])->name('bibek.update');
     Route::get('/delete-bibek/{id}', [\App\Http\Controllers\BibekController::class, 'destroy'])->name('bibek.destroy');
