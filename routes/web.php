<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth')->group(function () {
//     Route::get('wizkids/{id}', [ProfileController::class, 'show'])->name('wizkids.show');
//     Route::get('wizkids/create', [ProfileController::class, 'create'])->name('wizkids.create');
//     Route::get(uri: 'wizkids/edit', [ProfileController::class, 'edit'])->name('wizkids.edit');
//     Route::post('wizkids', [ProfileController::class, 'index'])->name('wizkids.index');
//     Route::get(uri: 'wizkids/delete', [ProfileController::class, 'delete'])->name('wizkids.delete');
// });
require __DIR__.'/auth.php';
