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

Route::get('/articles/{id}', [ArticlesController::class, 'show']);
// Route::get('/article/{id}', [ArticlesController::class, 'show']);
Route::get('/article/{article:title}', [ArticlesController::class, 'show']);
Route::get('/enregistrement', [ArticlesController::class, 'create']);
Route::post('/articles/create', [ArticlesController::class, 'store']);
Route::get('article/{article}/edit', [ArticlesController::class, 'edit']);
Route::patch('/article/{article}/edit', [ArticlesController::class, 'update']);
Route::delete('article/{article}/delete', [ArticlesController::class, 'delete']);