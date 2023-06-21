<?php

use App\Models\Informe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\DonsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\InformeController;
use App\Http\Controllers\ParraineController;
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
//todo simplifier les routes

Route::get('/', [MainController::class,'home'])->name('home');
Route::get('/articles', [MainController::class,'indexArticles'])->name('articles');
Route::get('/dons', [MainController::class,'indexDons'])->name('dons');
Route::get('/informes', [MainController::class,'indexInformes'])->name('informes');
Route::get('/informes/{informe:slug}', [MainController::class,'showInforme'])->name('informe');
Route::get('/parraines', [MainController::class,'indexParraines'])->name('parraines');
Route::get('/parraines/{parraine:slug}', [MainController::class,'showParraine'])->name('parraine');



Route::get('/contact', [MainController::class,'contact'])->name('contact');

// Route::get('/parraine', [MainController::class,'parraine'])->name('parraine');
Route::get('/projets', [MainController::class,'projets'])->name('projets');
Route::get('/association', [MainController::class,'association'])->name('association');
Route::get('/village', [MainController::class,'village'])->name('village');
//Route::get('/dons',[MainController::class,'dons'])->name('dons');
Route::get('/archives', [MainController::class,'archives'])->name('archives');
Route::get('/archives/{archive:id}', [Maincontroller::class,'archive'])->name('archive');
Route::get('/aides', [MainController::class,'aides'])->name('aides');
Route::get('faq', [MainController::class,'faq'])->name('faq');
Route::get('/mentions-legales', [MainController::class,'mentionsLegales'])->name('mentions-legales');

Route::get('/articles/{article:slug}', [ MainController::class,'show'])->name('article');
Auth::routes();
// espace admin
// ajout d'un menu
Route::get('/admin', [MainController::class,'admin'])->name('admin');
//informes
// image
Route::get('/admin/image-upload', [ImageController::class,'index'])->name('image.index');
Route::post('/admin/image-upload', [ImageController::class,'store'])->middleware('admin')->name('image.store');

Route::prefix('admin')->middleware('admin')->group(function () {
    // Route::resource('articles',ArticleController::class);
    Route::get('/articles', [ArticleController::class,'index'])->name('articles.index');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles/store', [ArticleController::class,'store'])->name('articles.store');
    Route::delete('/articles/{article}/delete', [ArticleController::class,'delete'])->name('articles.delete');
    Route::get('/articles/{article}/edit', [ArticleController::class,'edit'])->name('articles.edit');
    Route::put('/articles/{article}/update', [ArticleController::class,'update'])->name('articles.update');
    //photo
    Route::get('/photo', [ImageController::class,'indexPhoto'])->name('photo.index');
    Route::get('/photo/create', [ImageController::class,'create'])->name('photo.create');
    Route::delete('/photo/{photo:id}/delete', [ImageController::class,'delete'])->name('photo.delete');
    Route::get('/photo/{photo:id}/edit', [ImageController::class,'edit'])->name('photo.edit');
    Route::put('/photo/{photo}/update', [ImageController::class,'update'])->name('photo.update');
    // parraine
    // Route::resource('parraines',ParraineController::class);
    Route::get('/parraines', [ParraineController::class,'index'])->name('parraines.index');
    Route::get('/parraines/create', [ParraineController::class,'create'])->name('parraines.create');
    Route::post('/parraines/store', [ParraineController::class,'store'])->name('parraines.store');
    Route::delete('admin/parraines/{parraine:slug}/delete', [ParraineController::class,'delete'])->name('parraines.delete');
    Route::get('/parraines/{parraine}/edit', [ParraineController::class,'edit'])->name('parraines.edit');
    Route::put('/parraines/{parraine}/update', [ParraineController::class,'update'])->name('parraines.update');
    //informe
    Route::get('/informes', [InformeController::class,'index'])->name('informes.index');
    Route::get('/informes/create', [InformeController::class,'create'])->name('informes.create');
    Route::post('/informes/store', [InformeController::class,'store'])->name('informes.store');
    Route::get('/informes/{informes}/edit', [InformeController::class,'edit'])->name('informes.edit');
    Route::put('/informes/{informes}/update', [InformeController::class,'update'])->name('informes.update');
    Route::delete('/informes/{informe:slug}/delete', [InformeController::class,'delete'])->name('informes.delete');
    // dons
    Route::get('admin/dons', [DonsController::class,'index'])->name('dons.index');
    Route::get('admin/dons/create', [DonsController::class,'create'])->name('dons.create');
    Route::post('admin/dons/store', [DonsController::class,'store'])->name('dons.store');
    Route::get('admin/dons/{dons}/edit', [DonsController::class,'edit'])->name('dons.edit');
    Route::put('admin/dons/{dons}/update', [DonsController::class,'update'])->name('dons.update');
    Route::delete('admin/dons/{dons}/delete', [DonsController::class,'delete'])->name('dons.delete');
    //articles

});









//  Route::get('/test/env', function () {
//     dd(env('DB_DATABASE')); // Dump 'db' variable value one by one
// });

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::fallback(function () {
    return view('404');
});
