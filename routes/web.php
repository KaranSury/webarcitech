<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\ProductController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('auth/google',[GoogleAuthController::class,'redirect'])->name('google-auth');
Route::get('auth/google/call-back',[GoogleAuthController::class,'callbackGoogle']);

//    for product add view edit delete route 

Route::get('/dashboard', [App\Http\Controllers\ProductController::class, 'index'])->name('dashboard');

Route::get('/create', [App\Http\Controllers\ProductController::class, 'create'])->name('create');

Route::post('/store', [App\Http\Controllers\ProductController::class, 'store'])->name('store');

Route::get('/show/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('show');

Route::get('/edit/{product}', [App\Http\Controllers\ProductController::class, 'edit'])->name('edit');

Route::put('/edit/{product}', [App\Http\Controllers\ProductController::class, 'update'])->name('update');

Route::delete('/{product}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('destroy');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
