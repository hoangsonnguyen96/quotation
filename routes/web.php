<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomepageController::class, 'index'])->name('homepage');

Auth::routes();

Route::middleware(['auth'])->group(function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'categories'], function(){
    Route::get('/index', [App\Http\Controllers\CategoriesController::class, 'index'])->name('categories.index');
    Route::post('/store', [App\Http\Controllers\CategoriesController::class, 'store'])->name('categories.create');
    Route::post('/update', [App\Http\Controllers\CategoriesController::class, 'update'])->name('categories.update');
    Route::post('/destroy', [App\Http\Controllers\CategoriesController::class, 'destroy'])->name('categories.destroy');
});

Route::group(['prefix'=>'credentials'], function(){
    Route::get('/index', [App\Http\Controllers\CredentialsController::class, 'index'])->name('credentials.index');
    Route::get('/create', [App\Http\Controllers\CredentialsController::class, 'create'])->name('credentials.create');
    Route::post('/store', [App\Http\Controllers\CredentialsController::class, 'store'])->name('credentials.store');
    Route::get('/edit/{id}', [App\Http\Controllers\CredentialsController::class, 'edit'])->name('credentials.edit');
    Route::post('/update', [App\Http\Controllers\CredentialsController::class, 'update'])->name('credentials.update');
    Route::post('/destroy', [App\Http\Controllers\CredentialsController::class, 'destroy'])->name('credentials.destroy');
});

Route::get('/upload', [App\Http\Controllers\HomeController::class, 'index'])->name('upload.index');

});
