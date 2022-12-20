<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => auth()->check() ? redirect('/home') : view('welcome'));

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Esta línea de código crea todas las rutas que hemos hecho anteriormente
Route::resource('contacts', ContactController::class);

//Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
//Route::put('/contacts/{contact}/', [ContactController::class, 'update'])->name('contacts.update');
//Route::get('/contacts/{contact}/', [ContactController::class, 'show'])->name('contacts.show');
//Route::post('/contacts/', [ContactController::class, 'store'])->name('contacts.store');
//Route::delete('contact/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
//Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
//Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');