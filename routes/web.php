<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CellarController;
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

Route::get('/cellars', function () {
    return view('cellars');
})->middleware(['auth', 'verified'])->name('cellars');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// CELLIERS
Route::get('/cellars', [CellarController::class, 'index'])->name('cellars.index');
Route::get('/cellars-create', [CellarController::class, 'create'])->name('cellar.create');
Route::post('/cellars-create', [CellarController::class, 'store'])->name('cellar.store');
Route::get('/cellars/{cellar}', [CellarController::class, 'show'])->name('cellar.show');
Route::get('/cellars-edit/{cellar}', [CellarController::class, 'edit'])->name('cellar.edit');
Route::put('/cellars-edit/{cellar}', [CellarController::class, 'update']);
Route::delete('/cellars/{cellar}', [CellarController::class, 'destroy']);

require __DIR__ . '/auth.php';
