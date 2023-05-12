<?php

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

Route::get('/', App\Http\Livewire\FullPages\CategoryList::class);

Route::get('/add', App\Http\Livewire\FullPages\Forms\CategoryAdd::class);
Route::get('/{id}/edit', App\Http\Livewire\FullPages\Forms\CategoryEdit::class);
Route::get('/{id}/delete', App\Http\Livewire\FullPages\Forms\CategoryDelete::class);