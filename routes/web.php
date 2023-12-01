<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealShareController;
use App\Http\Controllers\TagController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(MealShareController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index')->middleware('auth');
    Route::get('/create', 'create')->name('create');
    Route::get('/mypage', 'mypage')->name('mypage');
    Route::get('/ranking', 'ranking')->name('ranking');
    Route::post('/posts', 'store')->name('store');
    Route::get('/posts/{post}', 'show')->name('show');
    Route::post('/posts/{post}/review', 'review_create')->name('review_create');
    Route::get('/mypage/{post}/edit', 'edit')->name('edit');
    Route::put('/mypage/{post}', 'update')->name('update');
    Route::delete('/mypage/{post}/delete', 'delete')->name('delete');
});

Route::get('/tags/{tag}', [TagController::class, 'index']);


require __DIR__.'/auth.php';
