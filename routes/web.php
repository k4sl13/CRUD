<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/notes', [PageController:: class, 'index'])->name('notes');
Route::get('/note/create', [PageController:: class, 'create'])->name('note.create');
Route::post('/note/create', [PageController:: class, 'store'])->name('note.store');
Route::post('/note/delete', [PageController:: class, 'delete'])->name('note.delete');
Route::get('/note/{id}', [PageController:: class, 'edit'])->name('note.edit');
Route::post('/note/{id}', [PageController:: class, 'update'])->name('note.update');

