<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ArticleController;
use Illuminate\Console\Events\ArtisanStarting;

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

Route::get('/', [MainController::class,'home'])->name('home');
Route::get('/articles', [MainController::class,'index'])->name('articles');

Route::get('/contact',[MainController::class,'contact'])->name('contact');
Route::get('/infos',[MainController::class,'infos'])->name('infos');
Route::get('/parraine',[MainController::class,'parraine'])->name('parraine');
Route::get('/don',[MainController::class,'don'])->name('don');

Route::get('faq',[MainController::class,'faq'])->name('faq');
Route::get('/mentions-legales',[MainController::class,'mentionsLegales'])->name('mentions-legales');

Route::get('/articles/{article:slug}', [ MainController::class,'show'])->name('article');
Auth::routes();

Route::get('admin/articles',[ArticleController::class,'index'])->middleware('admin')->name('articles.index');
Route::get('/admin/articles/create', [ArticleController::class, 'create'])->middleware('admin')->name('articles.create');
Route::post('/admin/articles/store',[ArticleController::class,'store'])->middleware('admin')->name('articles.store');
Route::delete('/admin/articles/{article}/delete',[ArticleController::class,'delete'])->middleware('admin')->name('articles.delete');
 Route::get('/admin/articles/{article}/edit', [ArticleController::class,'edit'])->middleware('admin')->name('articles.edit');
 Route::put('/admin/articles/{article}/update',[ArticleController::class,'update'])->middleware('admin')->name('articles.update');
//  Route::get('/test/env', function () {
//     dd(env('DB_DATABASE')); // Dump 'db' variable value one by one
// });

// Route::get('/clear-cache', function() {
//     Artisan::call('cache:clear');
//     return "Cache is cleared";
// });
