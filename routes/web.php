<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;

Route::get('/', function () {
    return view('welcome');
});

//Listar séries
Route::get('/series', [SeriesController::class, 'index'])
    ->name('listar_series');

//Criar séries
Route::get('/series/criar', [SeriesController::class, 'create'])
    ->name('form_criar_serie');

//Criar séries
Route::post('/series/criar', [SeriesController::class, 'store']);

//Remover séries
Route::delete('/series/{id}', [SeriesController::class, 'destroy']);