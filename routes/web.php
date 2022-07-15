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
Route::get('/category/{id}', [App\Http\Controllers\HomepageController::class, 'category'])->name('category.index');
Route::get('/credential/{id}', [App\Http\Controllers\HomepageController::class, 'credentials'])->name('frontend.credentials.index');
Route::get('/quotation/{id}', [App\Http\Controllers\HomepageController::class, 'quotations'])->name('frontend.quotations.index');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/editor', [App\Http\Controllers\CKEditorController::class, 'index']);
    Route::post('/editor/image_upload', [App\Http\Controllers\CKEditorController::class, 'upload'])->name('ck.upload');
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

Route::group(['prefix'=>'quotations'], function(){
    Route::get('/index', [App\Http\Controllers\QuotationsController::class, 'index'])->name('quotations.index');
    Route::get('/create', [App\Http\Controllers\QuotationsController::class, 'create'])->name('quotations.create');
    Route::post('/store', [App\Http\Controllers\QuotationsController::class, 'store'])->name('quotations.store');
    Route::get('/edit/{id}', [App\Http\Controllers\QuotationsController::class, 'edit'])->name('quotations.edit');
    Route::post('/update', [App\Http\Controllers\QuotationsController::class, 'update'])->name('quotations.update');
    Route::post('/destroy', [App\Http\Controllers\QuotationsController::class, 'destroy'])->name('quotations.destroy');
});

Route::group(['prefix'=>'list-quotations'], function(){
    Route::get('/index', [App\Http\Controllers\ListQuotationController::class, 'index'])->name('listQuotations.index');
    Route::get('/create', [App\Http\Controllers\ListQuotationController::class, 'create'])->name('listQuotations.create');
    Route::post('/store', [App\Http\Controllers\ListQuotationController::class, 'store'])->name('listQuotations.store');
    Route::get('/edit/{id}', [App\Http\Controllers\ListQuotationController::class, 'edit'])->name('listQuotations.edit');
    Route::post('/update', [App\Http\Controllers\ListQuotationController::class, 'update'])->name('listQuotations.update');
    Route::post('/destroy', [App\Http\Controllers\ListQuotationController::class, 'destroy'])->name('listQuotations.destroy');
});

Route::get('/upload', [App\Http\Controllers\HomeController::class, 'index'])->name('upload.index');

});
