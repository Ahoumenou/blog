<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;

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

// Route::get('article/{article}', [ArticlesController::class, 'show']);
Route::get('/article/{id}', [ArticlesController::class, 'show']);
Route::get('/article/{id}', [PagesController::class, 'show']);