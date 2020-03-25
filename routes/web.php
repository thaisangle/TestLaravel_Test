<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PostController;

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

Route::group(['prefix' => 'user'], function() {
    Route::get('/',[UserController::class, 'index'])->name('user.home');
});

Route::group(['prefix' => 'post'], function() {
    Route::get('/',[PostController::class, 'index'])->name('post.home');
    Route::get('/{id}/edit',[PostController::class, 'FormEdit'])->name('post.edit');
    Route::post('/edit',[PostController::class, 'submitedit'])->name('post.edit.form');
    Route::get('/{id}/detail',[PostController::class,'detail'])->name('post.detail');
    Route::get('/{id}/delete',[PostController::class,'delete'])->name('post.delete');
});



// Route::get('post',[PostController::class, 'index'])->name('user.home');
