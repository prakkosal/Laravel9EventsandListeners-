<?php

use App\Http\Controllers\ArticleController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/article", [ArticleController::class, "index"])->name('article.index');
// Route::get("/article", [ArticleController::class, "index"])->name('article.index');
// Route::get("/article", [ArticleController::class, "index"])->name('article.index');
// Route::get("/article", [ArticleController::class, "index"])->name('article.index');

Route::group(["prefix"=>"article", "controller"=>ArticleController::class], function(){
    Route::get("/","index")->name('article.index');
    Route::get("/create","create")->name('article.create');
    Route::get("/edit/{ArticleModel}","edit")->name('article.edit');
    Route::post("/store","store")->name('article.store');
    Route::post("/update","update")->name('article.update');
});
