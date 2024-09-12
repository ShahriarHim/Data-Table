<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('url-link/create', [\App\Http\Controllers\LinkGeneratorController::class, 'create'])->name('url-link.create');
Route::post('url-link/store', [\App\Http\Controllers\LinkGeneratorController::class, 'store'])->name('url-link.store');
Route::get('url-link/list', [\App\Http\Controllers\LinkGeneratorController::class, 'index'])->name('url-link.list');


Route::delete('/url-link/delete/{id}', [\App\Http\Controllers\LinkGeneratorController::class, 'destroy'])->name('url-link.destroy');
Route::put('/url-link/update/{id}', [\App\Http\Controllers\LinkGeneratorController::class, 'update'])->name('url-link.update');
