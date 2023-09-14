<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\UserController;
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
    return view('layouts.master');
});

// Route::get('/contact-us', function () {
//     return view('layouts.contact');
// });


Route::get('/', [PagesController::class, 'article']);
Route::get('/articles', [ArticlesController::class, 'articles']);

Route::get('/contact-us', [PagesController::class, 'contact']);
Route::get('/about', [PagesController::class, 'about']);

Route::get('/articles/{id}', [ArticlesController::class, 'show']);
// Route::get('/article/{id}', [ArticlesController::class, 'show']);
Route::get('/article/{article:title}', [ArticlesController::class, 'show']);
// Route::get('/enregistrement', [ArticlesController::class, 'create']);
// Route::post('/articles/create', [ArticlesController::class, 'store']);
// Route::get('/article/{article}/edit', [ArticlesController::class, 'edit']);
// Route::patch('/article/{article}/edit', [ArticlesController::class, 'update']);
// Route::delete('/article/{article}/delete', [ArticlesController::class, 'delete']);
// Route::get('/register', [RegisterController::class, 'index'])->name('register');
// Route::post('/register', [RegisterController::class, 'create'])->name('register');
// Route::post('/login', [SessionsController::class, 'authenticate'])->name('login');
// Route::get('/login', [SessionsController::class, 'index'])->name('login');
// Route::get('/profile', [UserController::class, 'index'])->name('profile');
// Route::post('/logout', [SessionsController::class, 'logout'])->name('logout');


// Route::get('/enregistrement', [ArticlesController::class, 'create'])->middleware('auth');
// Route::post('/articles/create', [ArticlesController::class, 'store'])->middleware('auth');
Route::get('/enregistrement', [ArticlesController::class, 'create'])->middleware('admin');
Route::post('/articles/create', [ArticlesController::class, 'store'])->middleware('admin');

Route::get('/article/{article}/edit', [ArticlesController::class, 'edit'])->middleware('auth');
Route::patch('/article/{article}/edit', [ArticlesController::class, 'update'])->middleware('auth');
Route::delete('article/{article}/delete', [ArticlesController::class, 'delete'])->middleware('auth');

// Auth
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::get('/login', [SessionsController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [SessionsController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [SessionsController::class, 'logout'])->name('logout')->middleware('auth');
// profile
Route::get('/profile', [UserController::class, 'index'])->name('profile')->middleware('auth');
