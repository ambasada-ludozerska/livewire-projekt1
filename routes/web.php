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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/przedmioty', App\Http\Livewire\ItemList::class);
Route::get('/przedmioty/dodaj-przedmiot', App\Http\Livewire\ItemAdd::class);
Route::get('/przedmioty/{id}', App\Http\Livewire\ItemShow::class);
Route::get('/przedmioty/{id}/edytuj', App\Http\Livewire\ItemEdit::class);
Route::get('/przedmioty/{id}/usun', App\Http\Livewire\ItemDelete::class);